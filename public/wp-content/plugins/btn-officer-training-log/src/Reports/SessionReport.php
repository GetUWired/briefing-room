<?php

namespace BTN\BriefingRoom\Reports;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\TrainingRecord;
use BTN\BriefingRoom\TrainingSession;
use BTN\BriefingRoom\UserLogin;
use StellarWP\DB\QueryBuilder\QueryBuilder;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\WhereQueryBuilder;

class SessionReport
{
    use Traits\HasDateRange;


    public function __construct()
    {

    }

    public function getFileName(): string
    {
        return 'session-report' . ($this->hasDateRange() ? '-' . str_replace(' ', '_', $this->getStartDateFormatted()) : '') ;
    }

    // public function getFileName(): string
    // {
    //     $agencyId = Memberium::getContactField('_AgencyID');
    //     $agency = Agency::find($agencyId);
    //     $agency_name = ( isset($agency->name) ? $agency->name . '-' : '');
    //     return sanitize_file_name($agency_name . 'session-report' . ($this->hasDateRange() ? '-' . str_replace(' ', '_', $this->getStartDateFormatted()) : '') ). '.csv';
    // }


    public function getTrainingRecords( $session )
    {
        $agencyId = Memberium::getContactField('_AgencyID');

        $query = TrainingRecord::query()
            ->select(
				['trainingrecord.userId', 'userId']
            )->leftJoin(TrainingSession::getTable(), 'trainingsession.id', 'trainingrecord.sessionId', 'trainingsession')
            ->where('trainingsession.id', $session->id, '=')
            ->where('trainingrecord.userId', 0, '>');

        // Only include attendees who belong to the requesting manager's agency,
        // so training records from other agencies' officers/sergeants who attended
        // a shared/joint session aren't exposed in this agency's report.
        $query->joinRaw(
            "INNER JOIN (SELECT userId FROM wp_btn_managers WHERE organizationId = %d
                UNION
                SELECT facilitator.userId
                FROM wp_btn_sergeants facilitator
                JOIN wp_btn_stations station ON facilitator.stationId = station.id
                WHERE station.agencyId = %d
                UNION
                SELECT student.userId
                FROM wp_btn_officers student
                JOIN wp_btn_stations station ON student.stationId = station.id
                WHERE station.agencyId = %d) as agency_user_ids ON agency_user_ids.userId = trainingrecord.userId",
            $agencyId, $agencyId, $agencyId
        );

        if ($this->hasDateRange()) {
            $this->filterQueryByDateRange($query, 'trainingsession.completedAt');
        }



        return $query->getAll();
    }



    public function csv(): string
    {
        $agencyId = Memberium::getContactField('_AgencyID');
        $agency = Agency::find($agencyId);

        $data = [
            ["Report Title: " . ( isset($agency->name) ? $agency->name : '') . ' ' . ($this->sessionIds() == 'week' ? 'Weekly ' : '') . "Training Report", '', '', '', '', '', '', '', '', '', ''],
            ["Report Created By: System Generated", '', '', '', '', '', '', '', '', '', ''],
            ["Date Range of Report: {$this->getDateRangeFormatted()}", '', '', '', '', '', '', '', '', '', ''],
            ["Source: TheBriefingRoom.com", '', '', '', '', '', '', '', '', '', ''],
            ['', '', '', '', '', '', '', '', '', '', ''],
            ['User Full Name', 'Agency ID', 'Student ID', 'Training Title', 'User Role', 'Session ID', 'Duration', 'Facilitator', 'Completion Date', 'Station Name', 'Station ID'],
        ];

        $sessions = $this->getData();

        if (is_array($sessions) && !empty($sessions)) {
            foreach ($sessions as $s) {

                // Facilitator row
                $data[] = [
                    $s['facilitator']['last_name'] . ' ' . $s['facilitator']['first_name'],
                    $s['facilitator']['agency_id'],
                    $s['facilitator']['student_id'],
                    $s['title'],
                    $s['facilitator']['role'],
                    $s['id'],
                    $s['duration'],
                    $s['facilitator']['agency_id'],
                    $s['date'],
                    $s['facilitator']['station_name'],
                    $s['facilitator']['station_id']
                ];

                // Student rows
                if (is_array($s['students']) && $s['facilitator']['role'] !== 'Student') {
                    foreach ($s['students'] as $student) {
                        $data[] = [
                            $student['last_name'] . ' ' . $student['first_name'],
                            $student['agency_id'],
                            $student['student_id'],
                            $s['title'],
                            $student['role'],
                            $s['id'],
                            $s['duration'],
                            $s['facilitator']['agency_id'],
                            $s['date'],
                            $student['station_name'],
                            $student['station_id']
                        ];
                    }
                }
            }
        }

        // Write to a temporary memory stream using fputcsv for escaping
        $fp = fopen('php://temp', 'r+');

        foreach ($data as $row) {
            fputcsv($fp, $row); // escapes commas, quotes, newlines
        }

        rewind($fp);
        $csv = stream_get_contents($fp);
        fclose($fp);

        return $csv ?: ''; // Return safely even if empty
    }

    public function html(): string
    {


        $title = 'Session Report';

        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        $logo = $image[0];
        $logoAlt = get_bloginfo( 'name' );



        $meta = [
            "Date Range of Report: {$this->getDateRangeFormatted()}",
        ];


        $headers = [
            "Session ID",
            "Session Title",
            "Date",
            "Duration",
            "Num of Students",
          	"Students",
        ];

        $data = $this->getData();

        ob_clean();

        include 'templates/report-session.html.php';
        return ob_get_clean();
    }

    private function sessionIds() {

        if( isset($_GET['session_id']) && $_GET['session_id'] == 'all' ) return 'all';

        $session_ids = (isset($_GET['session_id']) && !empty($_GET['session_id']))
			? explode(',', $_GET['session_id'])
			: [0]; // ensure it's always an array
        return $session_ids;
    }


    // Get WP user name and role
    public function getUserData( $userId ) {


        $user_role = '';
        $user_info = get_userdata($userId);

        $first_name = ucfirst(strtolower($user_info->first_name)) ?? '';
        $last_name = ucfirst(strtolower($user_info->last_name)) ?? '';
        $full_name = trim($first_name . ' ' . $last_name);

        $agency_id = '';
        $student_id = '';
        $station_name = '';
        $station_id = '';

        $facilitator_sessions = '';
        $facilitator_logins = '';


        if (in_array('btn_briefing_room_officer', (array) $user_info->roles) || in_array('memberium_officer', (array) $user_info->roles) ) {

            $user_role = 'Student';

            $query = Officer::query();
            $query->where('officer.userId', $userId, '=');
            $fdata = $query->getAll();

            if( $fdata ) {
                $student = new Officer( get_object_vars($fdata[0]) );

                if( $student ) {
                    $agency_id = !empty($student->agencyId) ? $student->agencyId : Memberium::getContactFieldForUser('_AgencyIDPersonal', $student->userId);
                    $student_id = $student->id;
                    $station_id = $student->stationId;

                    $query = Station::query();
                    $query->where('station.id', $student->stationId , '=');
                    $fdata = $query->getAll();

                    if( $fdata ) {

                        $station = new Station( get_object_vars($fdata[0]) );

                        if( $station ) {
                            $station_name = $station->name;
                        }
                    }
                }

            }

        } else if (in_array('memberium_stationadmin', (array) $user_info->roles) || in_array('memberium_agencymanager', (array) $user_info->roles) ) {

            $user_role = 'Manager';

            $query = Manager::query();
            $query->where('manager.userId', $userId, '=');
            $fdata = $query->getAll();
            if( $fdata ) {
                $manager = new Manager( get_object_vars($fdata[0]) );

                if( $manager ) {

                    $student_id = $manager->id;

                    $facilitator_sessions = $manager->sessions()->count();
                    $facilitator_logins = $manager->logins()->count();

                    try {
                        $agency = $manager->agency();
                        if( $agency ) {
                            $agency_id = $agency->id;
                        }
                    } catch (\Exception $e) {}
                }
            }



        } else if (in_array('btn_briefing_room_sergeant', (array) $user_info->roles) || in_array('memberium_sergeant', (array) $user_info->roles) ) {

            $user_role = 'Facilitator';

            $query = Sergeant::query();
            $query->where('sergeant.userId', $userId, '=');
            $fdata = $query->getAll();
            if( $fdata ) {
                $facilitator = new Sergeant( get_object_vars($fdata[0]) );

                if ($facilitator ) {
                    
                    $agency_id = !empty($facilitator->agencyId) ? $facilitator->agencyId : Memberium::getContactFieldForUser('_AgencyIDPersonal', $facilitator->userId);
                    $student_id = $facilitator->id;
                    $station_name = $facilitator->stationName();

                    $facilitator_sessions = $facilitator->sessions()->count();
                    $facilitator_logins = $facilitator->logins()->count();

                    try {
                        $station = $facilitator->station();
                        if( $station ) {
                            $station_id = $station->id;
                        }
                    } catch (\Exception $e) {}
                }
            }
        }

        return [
            'last_name'=>$last_name,
            'first_name'=>$first_name,
            'full_name'=>$full_name,
            'role'=>$user_role,
            'agency_id'=>$agency_id,
            'student_id'=>$student_id,
            'station_name'=>$station_name,
            'station_id'=>$station_id,
            'facilitator_sessions'=>$facilitator_sessions,
            'facilitator_logins'=>$facilitator_logins,

        ];
    }

    public function getData() {

        $session_ids = $this->sessionIds();
		$data = [];

        $agency_id = Memberium::getContactField('_AgencyID');

        if( ! $agency_id ) return $data;

        // Resolve the requested session_id(s) against sessions this agency is actually
        // allowed to see. This applies whether session_id=all or an explicit comma-separated
        // list was requested, so a manager can't view another agency's session by editing
        // the session_id query param directly.
        $requestedSessionIds = $session_ids;

        $query = TrainingSession::query();

        $query->selectRaw( 'SELECT trainingsession.id' );

       $query->joinRaw( "INNER JOIN (SELECT userId FROM wp_btn_managers WHERE organizationId = %d
                        UNION
                        SELECT facilitator.userId
                        FROM wp_btn_sergeants facilitator
                        JOIN wp_btn_stations station ON facilitator.stationId = station.id
                        WHERE station.agencyId = %d
                        UNION
                        SELECT student.userId
                        FROM wp_btn_officers student
                        JOIN wp_btn_stations station ON student.stationId = station.id
                        WHERE station.agencyId = %d) as user_ids ON user_ids.userId=trainingsession.userId",
                        $agency_id, $agency_id, $agency_id );

        if ($requestedSessionIds !== 'all') {
            $query->whereIn('trainingsession.id', $requestedSessionIds);
        }

        if (isset($_GET['startDate']) && $_GET['startDate'] != null) {
            $query->where('trainingsession.completedAt', $_GET['startDate'], '>=');
        }

        if (isset($_GET['endDate']) && $_GET['endDate'] != null) {
            $query->where('trainingsession.completedAt', $_GET['endDate'], '<=');
        }

        $sessions = $query->getAll();

        if( ! is_array( $sessions ) ) return $data;

        $session_ids = [];
        foreach( $sessions as $session ) {
            $session_ids[] = $session->id;
        }


		foreach ($session_ids as $session_id) {
			$session = TrainingSession::find($session_id);

			if (!$session ) {
				continue; // skip invalid sessions
			}

            $records = $this->getTrainingRecords( $session );
 
            $students = array_map( function ($record) {

                return $this->getUserData( $record->userId );
            }, $records);

 

            // Sort students alphabetically
            usort($students, function($a, $b) {
                $last_cmp = strcmp($a['last_name'], $b['last_name']);
                if ($last_cmp === 0) {
                    return strcmp($a['first_name'], $b['first_name']);
                }
                return $last_cmp;
            });


            $facilitator = $this->getUserData( $session->userId );


            try {

                $training = $session->training()->getPost();



                $data[] = [
                    'meta' => [
                        'Facilitator First Name' => $facilitator['first_name'],
                        'Facilitator Last Name' => $facilitator['last_name'],
                        'Total Training Blocks Taught' => $facilitator['facilitator_sessions'],
                        'Total Number of Logins' => $facilitator['facilitator_logins'],
                    ],
                    'id' => $session->id,
                    'title' => $training->post_title,
                    'type' => $training->post_type, /* if not briefing it is a 3rd party log */
                    'description' => get_post_meta( $training->ID, 'description', true ),

                    'url' => $training->post_type == 'briefing' ? home_url('/') . 'briefing/' . $training->post_name : get_post_meta( $training->ID, 'video_url', true ),

                    'date' => date('m/d/Y', strtotime( $session->completedAt ) ),
                    'duration' => TimeFormatter::minutesToHours($session->duration),
                    'num_students' => count($records),
                    'students' => $students,
                    'facilitator' => $facilitator,
                ];
            } catch (\Exception $e) {}

		}

        return $data;
    }
}
