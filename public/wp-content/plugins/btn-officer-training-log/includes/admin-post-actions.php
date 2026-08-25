<?php

use BTN\BriefingRoom\Actions\ChangeFacilitatorToManager;
use BTN\BriefingRoom\Actions\ChangeFacilitatorToStudent;
use BTN\BriefingRoom\Actions\ChangeManagerToFacilitator;
use BTN\BriefingRoom\Actions\ChangeManagerToStudent;
use BTN\BriefingRoom\Actions\ChangeStudentToFacilitator;
use BTN\BriefingRoom\Actions\ChangeStudentToManager;
use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Reports\StudentReport;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\TrainingSession;
use BTN\BriefingRoom\TrainingRecord;
use League\Csv\Reader;
use League\Csv\Writer;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use StellarWP\DB\QueryBuilder\QueryBuilder;

add_action( 'admin_post_add_agency', function() {

    BTN\BriefingRoom\Agency::create([
        'name' => sanitize_text_field( $_REQUEST['name'] ),
        'state' => sanitize_text_field( $_REQUEST['state'] ),
    ]);

    wp_redirect($_REQUEST['redirect']);
    exit;
} );

add_action('admin_post_update_agency', function() {

    $agencyId = absint( $_REQUEST['agency_id'] );

    check_admin_referer("update_agency-$agencyId");

    $agency = Agency::find($agencyId);
    $agency->name = sanitize_text_field( $_REQUEST['name'] );
    $agency->state = sanitize_text_field( $_REQUEST['state'] );
    $agency->save();

    wp_redirect($_REQUEST['redirect']);
    exit;
});

add_action('admin_post_delete_agency', function() {

    $agencyId = sanitize_text_field( $_REQUEST['agency_id'] );

    check_admin_referer("delete_agency-$agencyId");

    \StellarWP\DB\DB::beginTransaction();
    Agency::query()->where('id', $agencyId)->delete();
    \StellarWP\DB\DB::commit();

    wp_redirect($_REQUEST['redirect']);
    exit;
});

add_action( 'admin_post_add_station', function() {

    BTN\BriefingRoom\Station::create([
        'name' => sanitize_text_field( $_REQUEST['name'] ),
        'agencyId' => sanitize_text_field( $_REQUEST['agencyId'] ),
    ]);

    wp_redirect($_REQUEST['redirect']);
    exit;
} );

add_action( 'admin_post_add_sergeant', function() {

    try {
        (new \BTN\BriefingRoom\Actions\CreateSergeant)(
            sanitize_text_field( $_REQUEST['firstName'] ),
            sanitize_text_field( $_REQUEST['lastName'] ),
            sanitize_text_field( $_REQUEST['emailAddress'] ),
            sanitize_text_field( $_REQUEST['stationId'] ),
            sanitize_text_field( $_REQUEST['organizationId'] ),
            sanitize_text_field( $_REQUEST['badgeId'] ),
            sanitize_text_field( $_REQUEST['stateId'] ),
            sanitize_text_field( $_REQUEST['agencyId'] ),
            sanitize_text_field( $_REQUEST['rank'] ),
            (bool) absint( $_REQUEST['sendWelcomeEmail'] )
        );
    } catch (\Exception $e) {
        wp_die($e->getMessage());
    }

    wp_redirect($_REQUEST['redirect']);
    exit;
} );

add_action( 'admin_post_update_sergeant', function() {
    $sergeant = Sergeant::find(absint($_REQUEST['sergeantId']));

    \StellarWP\DB\DB::beginTransaction();

    if($sergeant->userId) {
        $userId = wp_update_user([
            'ID' => $sergeant->userId,
            'first_name' => $_REQUEST['firstName'],
            'last_name' => $_REQUEST['lastName'],
            'user_email' => $_REQUEST['emailAddress'],
        ]);

        if(is_wp_error($userId)) {
            /** @var WP_Error $error */
            $error = $userId;
            \StellarWP\DB\DB::rollback();
            wp_die($error);
        }
    }

    $sergeant->firstName = sanitize_text_field( $_REQUEST['firstName'] );
    $sergeant->lastName = sanitize_text_field( $_REQUEST['lastName'] );
    $sergeant->emailAddress = sanitize_text_field( $_REQUEST['emailAddress'] );
    $sergeant->stationId = sanitize_text_field( $_REQUEST['stationId'] );

    if(!empty($_REQUEST['badgeId'])) $sergeant->badgeId = sanitize_text_field($_REQUEST['badgeId']);
    if(!empty($_REQUEST['stateId'])) $sergeant->stateId = sanitize_text_field($_REQUEST['stateId']);
    if(!empty($_REQUEST['agencyId'])) $sergeant->agencyId = sanitize_text_field($_REQUEST['agencyId']);
    if(!empty($_REQUEST['rank'])) $sergeant->rank = sanitize_text_field($_REQUEST['rank']);

    switch ($_REQUEST['role']) {
        case 'manager':
            (new ChangeFacilitatorToManager)($sergeant);
            break;
        case 'student':
            (new ChangeFacilitatorToStudent)($sergeant);
            break;
        default:
            $sergeant->save();
    }

    \StellarWP\DB\DB::commit();

    wp_redirect($_REQUEST['redirect']);
    exit;
} );

add_action( 'admin_post_add_officer', function() {

    try {
        (new \BTN\BriefingRoom\Actions\CreateOfficer)(
            sanitize_text_field( $_REQUEST['firstName'] ),
            sanitize_text_field( $_REQUEST['lastName'] ),
            sanitize_text_field( $_REQUEST['emailAddress'] ),
            absint( $_REQUEST['organizationId'] ), // Organization ID
            absint( $_REQUEST['stationId'] ),
            sanitize_text_field( $_REQUEST['badgeId'] ),
            sanitize_text_field( $_REQUEST['stateId'] ),
            sanitize_text_field( $_REQUEST['agencyId'] ),
            sanitize_text_field( $_REQUEST['rank'] ),
            (bool) absint( $_REQUEST['sendWelcomeEmail'] )
        );
    } catch (\Exception $e) {
        wp_die($e->getMessage());
    }

    wp_redirect($_REQUEST['redirect']);
    exit;
} );

add_action( 'admin_post_update_officer', function() {
    $officer = Officer::find(absint($_REQUEST['officerId']));

    \StellarWP\DB\DB::beginTransaction();

    if($officer->userId) {
        $userId = wp_update_user([
            'ID' => $officer->userId,
            'first_name' => $_REQUEST['firstName'],
            'last_name' => $_REQUEST['lastName'],
            'user_email' => $_REQUEST['emailAddress'],
        ]);

        if(is_wp_error($userId)) {
            /** @var WP_Error $error */
            $error = $userId;
            \StellarWP\DB\DB::rollback();
            wp_die($error);
        }
    }

    $officer->firstName = sanitize_text_field( $_REQUEST['firstName'] );
    $officer->lastName = sanitize_text_field( $_REQUEST['lastName'] );
    $officer->emailAddress = sanitize_text_field( $_REQUEST['emailAddress'] );
    $officer->stationId = sanitize_text_field( $_REQUEST['stationId'] );

    if(!empty($_REQUEST['badgeId'])) $officer->badgeId = sanitize_text_field($_REQUEST['badgeId']);
    if(!empty($_REQUEST['stateId'])) $officer->stateId = sanitize_text_field($_REQUEST['stateId']);
    if(!empty($_REQUEST['agencyId'])) $officer->agencyId = sanitize_text_field($_REQUEST['agencyId']);
    if(!empty($_REQUEST['rank'])) $officer->rank = sanitize_text_field($_REQUEST['rank']);

    switch ($_REQUEST['role']) {
        case 'manager':
            (new ChangeStudentToManager)($officer);
            break;
        case 'facilitator':
            (new ChangeStudentToFacilitator)($officer);
            break;
        default:
            $officer->save();
    }

    \StellarWP\DB\DB::commit();

    wp_redirect($_REQUEST['redirect']);
    exit;
} );

add_action('admin_post_log_training', function() {
    $duration = absint($_REQUEST['duration']);

    if(isset($_REQUEST['trainingId'])) {
        $trainingId = absint($_REQUEST['trainingId']);
    } else {
        $trainingId = wp_insert_post([
            'post_title'    => sanitize_text_field($_REQUEST['title']),
            'post_status'   => 'publish',
            'post_type'     => 'btnbf_training',
        ]);

        if(is_wp_error($trainingId)) {
            wp_die($trainingId->get_error_message());
        }

        $video_url = isset($_REQUEST['video_url']) ? esc_url_raw($_REQUEST['video_url']) : '';
        update_post_meta($trainingId, 'video_url', $video_url);

        $description = isset($_REQUEST['description']) ? sanitize_textarea_field($_REQUEST['description']) : '';
        update_post_meta($trainingId, 'description', $description);


    }

    // Ensure students is an array
    if (!is_array($_REQUEST['students'])) {
        wp_die('No Students Selected');
    }

    $studentUserIds = array_map(function($userId) {
        return absint($userId);
    }, $_REQUEST['students']);

    $today = current_time('Y-m-d');
    $newStudentUserIds = [];

    foreach ($studentUserIds as $studentUserId) {
        $existing = BTN\BriefingRoom\TrainingRecord::findSessionForTrainingOnDate($trainingId, $studentUserId, $today);

        if ($existing) {
            // Only update in place if this session belongs solely to this student -
            // never mutate a shared/group session's duration on behalf of one attendee.
            if (BTN\BriefingRoom\TrainingRecord::countForSession($existing->sessionId) <= 1) {
                $existingSession = BTN\BriefingRoom\TrainingSession::find($existing->sessionId);
                $existingSession->duration = $duration;
                $existingSession->completedAt = current_time('mysql');
                $existingSession->stationId = resolve_station_id_for_user($existingSession->userId);
                $existingSession->save();
            }
            continue;
        }

        $newStudentUserIds[] = $studentUserId;
    }

    if (!empty($newStudentUserIds)) {
        $currentUserId = get_current_user_id();

        $session = BTN\BriefingRoom\TrainingSession::create([
            'trainingId' => $trainingId,
            'userId' => $currentUserId,
            'stationId' => resolve_station_id_for_user($currentUserId),
            'duration' => $duration,
            'completedAt' => current_time('mysql'),
        ]);

        foreach ($newStudentUserIds as $studentUserId) {
            BTN\BriefingRoom\TrainingRecord::create([
                'sessionId' => $session->id,
                'userId' => $studentUserId,
            ]);
        }
    }

    wp_redirect( add_query_arg('success', 1, $_REQUEST['redirect']) );
});

add_action('admin_post_log_training_manager', function() {
    $duration = absint($_REQUEST['duration']);

    if(isset($_REQUEST['trainingId'])) {
        $trainingId = absint($_REQUEST['trainingId']);
    } else {
        $trainingId = wp_insert_post([
            'post_title'    => sanitize_text_field($_REQUEST['title']),
            'post_status'   => 'publish',
            'post_type'     => 'btnbf_training',
        ]);

        if(is_wp_error($trainingId)) {
            wp_die($trainingId->get_error_message());
        }

        $video_url = isset($_REQUEST['video_url']) ? esc_url_raw($_REQUEST['video_url']) : '';
        update_post_meta($trainingId, 'video_url', $video_url);

        $description = isset($_REQUEST['description']) ? sanitize_textarea_field($_REQUEST['description']) : '';
        update_post_meta($trainingId, 'description', $description);
    }

    if (!is_array($_REQUEST['students'])) {
        wp_die('No Students Selected');
    }

    $studentUserIds = array_map(function($userId) {
        return absint($userId);
    }, $_REQUEST['students']);

    $today = current_time('Y-m-d');
    $newStudentUserIds = [];

    foreach ($studentUserIds as $studentUserId) {
        $existing = BTN\BriefingRoom\TrainingRecord::findSessionForTrainingOnDate($trainingId, $studentUserId, $today);

        if ($existing) {
            // Only update in place if this session belongs solely to this student -
            // never mutate a shared/group session's duration on behalf of one attendee.
            if (BTN\BriefingRoom\TrainingRecord::countForSession($existing->sessionId) <= 1) {
                $existingSession = BTN\BriefingRoom\TrainingSession::find($existing->sessionId);
                $existingSession->duration = $duration;
                $existingSession->completedAt = current_time('mysql');
                $existingSession->stationId = resolve_station_id_for_user($existingSession->userId);
                $existingSession->save();
            }
            continue;
        }

        $newStudentUserIds[] = $studentUserId;
    }

    if (!empty($newStudentUserIds)) {
        $currentUserId = get_current_user_id();

        $session = BTN\BriefingRoom\TrainingSession::create([
            'trainingId' => $trainingId,
            'userId' => $currentUserId,
            'stationId' => resolve_station_id_for_user($currentUserId),
            'duration' => $duration,
            'completedAt' => current_time('mysql'),
        ]);

        foreach ($newStudentUserIds as $studentUserId) {
            BTN\BriefingRoom\TrainingRecord::create([
                'sessionId' => $session->id,
                'userId' => $studentUserId,
            ]);
        }
    }

    wp_redirect( add_query_arg('success', 1, $_REQUEST['redirect']) );
});

add_action('admin_post_log_training_officer', function() {

    $userId = get_current_user_id();
    $stationId = resolve_station_id_for_user($userId);
    $session = null;

    if(isset($_REQUEST['trainingId'])) {
        $training = new \BTN\BriefingRoom\Training(absint($_REQUEST['trainingId']));
        $today = current_time('Y-m-d');
        $existing = BTN\BriefingRoom\TrainingRecord::findSessionForTrainingOnDate($training->id, $userId, $today);

        if ($existing) {
            // Only update in place if this session belongs solely to this user -
            // never mutate a shared/group session's duration on their behalf.
            if (BTN\BriefingRoom\TrainingRecord::countForSession($existing->sessionId) <= 1) {
                $existingSession = BTN\BriefingRoom\TrainingSession::find($existing->sessionId);
                $existingSession->duration = $training->getDurationInMinutes();
                $existingSession->completedAt = current_time('mysql');
                $existingSession->stationId = $stationId;
                $existingSession->save();
            }
        } else {
            $session = BTN\BriefingRoom\TrainingSession::create([
                'trainingId' => $training->id,
                'userId' => $userId,
                'stationId' => $stationId,
                'duration' => $training->getDurationInMinutes(),
                'completedAt' => current_time('mysql'),
            ]);
        }

    } else {
        // 3rd party training
        $trainingId = wp_insert_post([
            'post_title' => sanitize_text_field($_REQUEST['title']),
            'post_status' => 'publish',
            'post_type' => 'btnbf_training',
        ]);

        if (is_wp_error($trainingId)) {
            wp_die($trainingId->get_error_message());
        }

        $video_url = isset($_REQUEST['video_url']) ? esc_url_raw($_REQUEST['video_url']) : '';
        update_post_meta($trainingId, 'video_url', $video_url);

        $description = isset($_REQUEST['description']) ? sanitize_textarea_field($_REQUEST['description']) : '';
        update_post_meta($trainingId, 'description', $description);

        $duration = absint($_REQUEST['duration']);

        $session = BTN\BriefingRoom\TrainingSession::create([
            'trainingId' => $trainingId,
            'userId' => $userId,
            'stationId' => $stationId,
            'duration' => $duration,
            'completedAt' => current_time('mysql'),
        ]);
    }

    if ($session) {
        BTN\BriefingRoom\TrainingRecord::create([
            'sessionId' => $session->id,
            'userId' => $userId,
        ]);
    }

    wp_redirect( add_query_arg('success', 1, $_REQUEST['redirect']) );
});

add_action( 'admin_post_sergeant_report', function() {

    $sergeantId = absint($_REQUEST['sergeant_id']);
    $sergeant = BTN\BriefingRoom\Sergeant::find($sergeantId);

    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($sergeant->name()));
    header('Content-Type: text/csv; charset=utf-8');
    header("Content-Disposition: attachment; filename=$slug-report.csv");

    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Training', 'Duration', 'Completed At']);

    foreach($sergeant->sessions()->models as $session) {
        fputcsv($output, [
            $session->id,
            $session->training()->getTitle(),
            $session->duration,
            $session->completedAt,
        ]);
    }
});


add_action( 'wp_ajax_add_officer', function() {

    if ( check_ajax_referer( '_ajax_nonce' ) ) {

        \StellarWP\DB\DB::beginTransaction();

        $userId = wp_insert_user([
            'user_login' => sanitize_text_field( $_REQUEST['emailAddress'] ),
            'first_name' => sanitize_text_field( $_REQUEST['firstName'] ),
            'last_name' => sanitize_text_field( $_REQUEST['lastName'] ),
            'user_email' => sanitize_text_field( $_REQUEST['emailAddress'] ),
            'user_pass' => wp_generate_password(),
            'role' => Officer::ROLE,
        ]);

        if(is_wp_error($userId)) {
            /** @var WP_Error $error */
            $error = $userId;
            \StellarWP\DB\DB::rollback();
			wp_send_json_error($error);
        }

        $officer = BTN\BriefingRoom\Officer::create([
            'firstName' => sanitize_text_field( $_REQUEST['firstName'] ),
            'lastName' => sanitize_text_field( $_REQUEST['lastName'] ),
            'emailAddress' => sanitize_text_field( $_REQUEST['emailAddress'] ),
            'badgeId' => sanitize_text_field( $_REQUEST['badgeId'] ),
            'stateId' => sanitize_text_field( $_REQUEST['stateId'] ),
            'agencyId' => sanitize_text_field( $_REQUEST['agencyId'] ),
            'stationId' => sanitize_text_field( $_REQUEST['stationId'] ),
            'rank' => sanitize_text_field( $_REQUEST['rank'] ),
            'userId' => $userId,
        ]);

        \StellarWP\DB\DB::commit();

        wp_send_json_success($officer->toArray());
    } else {
        wp_send_json_error('Something went wrong');
    };

} );

add_action('admin_post_csv_stations_template', static function() {
    ob_clean();
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename="station-csv-template.csv"');

    echo <<<CSV
Name
Station Full Name
CSV;
    die;
});

add_action('admin_post_csv_add_stations', static function() {

    if ( empty( $_FILES ) || ! isset( $_FILES[ 'csv_stations' ] ) || $_FILES[ 'csv_stations' ][ 'error' ] == 4 ) {
        wp_die('No file uploaded.');
    }

    $importer = new \BTN\BriefingRoom\Actions\ImportBulkStations(
        Agency::find( absint($_REQUEST['agencyId']) )
    );

    try {
        $count = $importer->import(
            Reader::createFromPath($_FILES['csv_stations']['tmp_name'], 'r')
                ->setHeaderOffset(0)
        );
    } catch (Exception $e) {
        wp_die($e->getMessage());
    }

    $args = [
        'response' => 200,
        'link_text' => 'Done',
    ];

    if(isset($_REQUEST['redirect'])) {
        $args['link_url'] = $_REQUEST['redirect'];
    }

    wp_die(
        $count ? sprintf('Added %d stations.', $count) : 'No stations added.',
        'Import complete',
        $args
    );
});

add_action('admin_post_csv_sergeants_template', static function() {
    ob_clean();
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename="facilitator-csv-template.csv"');

    $email = time() . '@test.test';

    echo <<<CSV
Rank,First Name,Last Name,Email,Station,Badge ID,State ID,Agency ID,Send Welcome
Sergeant,John,Doe,$email,Station Full Name,bg-1234,st-1234,ag-1234,1
CSV;
    die;
});

add_action('admin_post_csv_add_sergeants', static function() {

    if ( empty( $_FILES ) || ! isset( $_FILES[ 'csv_sergeants' ] ) || $_FILES[ 'csv_sergeants' ][ 'error' ] == 4 ) {
        wp_die('No file uploaded.');
    }

    $importer = new \BTN\BriefingRoom\Actions\ImportBulkSergeants(
        Agency::find( absint($_REQUEST['agencyId']) )
    );

    try {
        $results = $importer->import(
            Reader::createFromPath($_FILES['csv_sergeants']['tmp_name'], 'r')
                ->setHeaderOffset(0)
        );
    } catch (Exception $e) {
        wp_die($e->getMessage());
    }

    add_filter( 'qm/dispatch/wp_die', '__return_false' );

    wp_die(
        $results->renderReportHTML(),
        'Import complete',
        array_filter([
            'response' => 200,
            'link_text' => 'Back to the Agencies Page',
            'link_url' => @$_REQUEST['redirect'] ?? '',
        ])
    );
});

add_action('admin_post_csv_officers_template', static function() {
    ob_clean();
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename="student-csv-template.csv"');

    $email = time() . '@test.test';

    echo <<<CSV
Rank,First Name,Last Name,Email,Station,Badge ID,State ID,Agency ID,Send Welcome
officer,John,Doe,$email,Station Full Name,12345,12345,12345,1
CSV;
    die;
});

add_action('admin_post_csv_add_officers', static function() {

    if ( empty( $_FILES ) || ! isset( $_FILES[ 'csv_officers' ] ) || $_FILES[ 'csv_officers' ][ 'error' ] == 4 ) {
        wp_die('No file uploaded.');
    }

    $importer = new \BTN\BriefingRoom\Actions\ImportBulkOfficers(
        Agency::find( absint($_REQUEST['agencyId']) )
    );

    try {
        $results = $importer->import(
            Reader::createFromPath($_FILES['csv_officers']['tmp_name'], 'r')
                ->setHeaderOffset(0)
        );
    } catch (Exception $e) {
        wp_die($e->getMessage());
    }

    add_filter( 'qm/dispatch/wp_die', '__return_false' );

    wp_die(
        $results->renderReportHTML(),
        'Import complete',
        array_filter([
            'response' => 200,
            'link_text' => 'Back to the Agencies Page',
            'link_url' => @$_REQUEST['redirect'] ?? '',
        ])
    );
});


/*==========================================================
 * Generate Officer CSV
 *========================================================*/
add_action('wp_ajax_generate_officer_csv_report',function(){

	 if ( check_ajax_referer( '_ajax_nonce' ) ) {

         try {
             $officer = BTN\BriefingRoom\Officer::find(absint($_POST['id']));
         } catch (Exception $e) {
             wp_send_json_error('Student not found.');
         }

         $report = new StudentReport($officer);

         if(!empty($_POST['startDate'])) {
             $report->setStartDate(sanitize_text_field($_POST['startDate']));
         }

         if(!empty($_POST['endDate'])) {
             $report->setEndDate(sanitize_text_field($_POST['endDate']));
         }

         $dateRange = implode(' - ', array(@$_POST['startDate'], @$_POST['endDate']));

		 	/*=================================================================
		 	 * Generating Data
		 	 *================================================================*/

		 	$officerName = $officer->firstName.'-'.$officer->lastName;
		 	$file_name = str_replace(' ', '-', $officerName).'-Officer-Report.csv';

			$sessionsQuery = \StellarWP\DB\DB::table('btn_training_sessions', 'sessions')
				->join(function (\StellarWP\DB\QueryBuilder\JoinQueryBuilder $builder) {
					$builder
						->leftJoin('btn_training_records', 'records')
						->on('sessions.id', 'records.sessionId');
				})
				->join(function (\StellarWP\DB\QueryBuilder\JoinQueryBuilder $builder) {
					$builder
						->leftJoin('posts', 'training')
						->on('sessions.trainingId', 'training.ID');
				})
				->where('sessions.officerId', $officer->id)
				->orWhere('records.officerId', $officer->id);


		 if(!empty($_POST['startDate']) && !empty($_POST['endDate'])) {

			 	$startDate = date('Y-m-d', strtotime(sanitize_text_field($_POST['startDate'])));
				$endDate = date('Y-m-d', strtotime(sanitize_text_field($_POST['endDate'])));

				$sessionsQuery->whereBetween('completedAt', $startDate, $endDate);

			} elseif(!empty($_POST['startDate'])) {

			 	$startDate = date('Y-m-d', strtotime(sanitize_text_field($_POST['startDate'])));
				$sessionsQuery->where('completedAt', $startDate, '>=');

			} elseif(!empty($_POST['endDate'])) {

				$endDate = date('Y-m-d', strtotime(sanitize_text_field($_POST['endDate'])));
				$sessionsQuery->where('completedAt', $endDate, '<');

			}

			$totalTrainingQuery = clone $sessionsQuery; // Clone before adding select()

         $data = [
             ["Date Range of Report: $dateRange", '', '', '',''],
             ["Rank: $officer->rank", '', '', '',''],
             ["Facilitator First Name: $officer->firstName", '', '', '',''],
             ["Facilitator Last Name: $officer->lastName", '', '', '',''],
             ["Agency ID: $officer->agencyId", '', '', '',''],
             ["Badge ID: $officer->badgeId", '', '', '',''],
             ["State ID: $officer->stateId", '', '', '',''],
             ["Total Training Blocks Completed: {$sessionsQuery->count('sessions.id')}", '', '', '',''],
             ['Session ID', 'Training Title', 'Duration', 'Completion Date']
         ];

         $sessionsQuery->select( 'sessions.id as sessionId', 'training.post_title as trainingTitle', 'duration', 'completedAt');

		 	foreach($sessionsQuery->getAll() as $row) {
				$data[] = [
                    $row->sessionId,
					$row->trainingTitle,
					TimeFormatter::minutesToHours($row->duration),
					$row->completedAt,
				];
			}

		   $upload_dir = wp_upload_dir();
			$file_path = $upload_dir['basedir'] . '/'.$file_name;
			$file_url = $upload_dir['baseurl'] . '/'.$file_name;

			try {

				// Create a Writer instance
				$csv = Writer::createFromPath($file_path, 'w+');

				// Insert rows into the CSV
				$csv->insertAll($data);

				// Return the file URL as a JSON response
				wp_send_json_success(['file_url' => $file_url]);

			} catch (Exception $e) {
				wp_send_json_error('Error creating CSV');
			}

	 }

});

/*==========================================================
 * Generate Sergeant CSV
 *========================================================*/
add_action('wp_ajax_generate_sergeant_csv_report',function(){

	 if ( check_ajax_referer( '_ajax_nonce' ) ) {

         $sergeantId = absint($_POST['id']);
         $sergeant = Sergeant::find($sergeantId);

         if (!$sergeant) {
             wp_die('Invalid Facilitator ID.');
         }

         if(isset($_REQUEST['startDate']) && $_REQUEST['startDate']) $startDate = date('Y-m-d', strtotime($_REQUEST['startDate']));
         if(isset($_REQUEST['endDate']) && $_REQUEST['endDate']) $endDate = date('Y-m-d', strtotime($_REQUEST['endDate']));

         $dateRange = implode(' - ', array($startDate, $endDate));

			$data = [
                ["Date Range of Report: $dateRange", '', '', '',''],
                ["Rank: $sergeant->rank", '', '', '',''],
                ["Facilitator First Name: $sergeant->firstName", '', '', '',''],
                ["Facilitator Last Name: $sergeant->lastName", '', '', '',''],
                ["Agency ID: $sergeant->agencyId", '', '', '',''],
                ["Badge ID: $sergeant->badgeId", '', '', '',''],
                ["State ID: $sergeant->stateId", '', '', '',''],
                ["Total Training Blocks Taught: {$sergeant->sessions()->count()}", '', '', '',''],
                ["Total Number of Logins: {$sergeant->logins()->count()}", '', '', '',''],
				['Session ID', 'Training Title', 'Duration of Training', 'Number of Students', 'Completion Date'],
			];

		 	/*=================================================================
		 	 * Generating Data
		 	 *================================================================*/

		 	$sergeantName = $sergeant->firstName.'-'.$sergeant->lastName;
		 	$file_name = str_replace(' ', '-', $sergeantName).'-Facilitator-Report.csv';

		 	$query = TrainingSession::query();

		 	$query->where('sergeantId',$sergeantId);

		 	if(isset($startDate) && isset($endDate)) {
				$query->whereBetween('completedAt', $startDate, $endDate);
			} elseif(isset($startDate)) {
				$query->where('completedAt', $startDate, '>=');
			} elseif(isset($endDate)) {
				$query->where('completedAt', $endDate, '<');
			}


		 	foreach($query->getAll() as $row) {
				$session = TrainingSession::find($row->id);
				$data[] = [
					$row->id,
					$session->training()->getTitle(),
					TimeFormatter::minutesToHours($row->duration),
                    $session->records()->count(),
					$row->completedAt,
				];
			}

		    $upload_dir = wp_upload_dir();
			$file_path = $upload_dir['basedir'] . '/'.$file_name;
			$file_url = $upload_dir['baseurl'] . '/'.$file_name;

			try {

				// Create a Writer instance
				$csv = Writer::createFromPath($file_path, 'w+');

				// Insert rows into the CSV
				$csv->insertAll($data);

				// Return the file URL as a JSON response
				wp_send_json_success(['file_url' => $file_url]);

			} catch (Exception $e) {
				wp_send_json_error('Error creating CSV');
			}

	 }

});

add_action('wp_ajax_generate_station_csv_report',function(){

	 if ( check_ajax_referer( '_ajax_nonce' ) ) {

			$data = [
				['Facilitator ID', 'Facilitator Name', 'Sessions Taught', 'Training Time']
			];


		 	/*=================================================================
		 	 * Generating Data
		 	 *================================================================*/

			if(isset($_REQUEST['startDate']) && $_REQUEST['startDate']) $startDate = date('Y-m-d', strtotime($_REQUEST['startDate']));
			if(isset($_REQUEST['endDate']) && $_REQUEST['endDate']) $endDate = date('Y-m-d', strtotime($_REQUEST['endDate']));

			$stationId = absint($_POST['id']);

			if (!$stationId) {
				wp_die('Invalid Station ID.');
			}

		 	$stationName = Station::find($stationId)->name;
		 	$file_name = str_replace(' ', '-', $stationName).'-station-Report.csv';

		 	$query = Sergeant::query();

			$query->where('stationId', $stationId);

		 	$query = Sergeant::withTrainingTime($query, function(QueryBuilder $query) {
						if(isset($startDate) && isset($endDate)) {
							$query->whereBetween('completedAt', $startDate, $endDate);
						} elseif(isset($startDate)) {
							$query->where('completedAt', $startDate, '>=');
						} elseif(isset($endDate)) {
							$query->where('completedAt', $endDate, '<');
						}
					});

		 	foreach($query->getAll() as $row) {
				$data[] = [
					$row->id,
					$row->firstName.' '.$row->lastName,
					$row->sessionCount,
					TimeFormatter::minutesToHours($row->trainingTime),
				];
			}

		 $upload_dir = wp_upload_dir();
			$file_path = $upload_dir['basedir'] . '/'.$file_name;
			$file_url = $upload_dir['baseurl'] . '/'.$file_name;

			try {

				// Create a Writer instance
				$csv = Writer::createFromPath($file_path, 'w+');

				// Insert rows into the CSV
				$csv->insertAll($data);

				// Return the file URL as a JSON response
				wp_send_json_success(['file_url' => $file_url]);

			} catch (Exception $e) {
				wp_send_json_error('Error creating CSV');
			}

	 }

});

add_action('admin_post_delete_station', function() {

    if (!current_user_can('manage_options')) { wp_die('Unauthorized', 403); }

    $stationId = absint( $_REQUEST['station_id'] );

    check_admin_referer("delete_station-$stationId");

    $station = Station::find($stationId);

    if ($station->officers()->count() || $station->sergeants()->count()) {
        wp_die('Cannot delete a station with students or facilitators assigned. Use the merge tool to move them to another station first.');
    }

    global $wpdb;
    $assignedTrainingCount = (int) $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(*) FROM {$wpdb->prefix}assigned_training_items WHERE assigned_type = 'station' AND assigned_to = %d",
        $stationId
    ));

    if ($assignedTrainingCount) {
        wp_die('Cannot delete a station with training assignments. Use the merge tool to move them to another station first.');
    }

    if(!$station->delete()) {
        wp_die('Unable to delete station ID ' . $stationId);
    }

    wp_redirect($_REQUEST['redirect']) && exit;
});

add_action('admin_post_merge_station', function() {

    if (!current_user_can('manage_options')) { wp_die('Unauthorized', 403); }

    $stationId = absint( $_REQUEST['station_id'] );
    $targetId = absint( $_REQUEST['target_station_id'] );

    check_admin_referer("merge_station-$stationId");

    if ($stationId === $targetId) {
        wp_die('Cannot merge a station into itself.');
    }

    $source = Station::find($stationId);
    $target = Station::find($targetId);

    if ($source->agencyId != $target->agencyId) {
        wp_die('Target station must belong to the same agency.');
    }

    global $wpdb;

    \StellarWP\DB\DB::beginTransaction();

    $wpdb->update($wpdb->prefix.'btn_officers', ['stationId' => $targetId], ['stationId' => $stationId]);
    $wpdb->update($wpdb->prefix.'btn_sergeants', ['stationId' => $targetId], ['stationId' => $stationId]);
    $wpdb->update($wpdb->prefix.'assigned_training_items', ['assigned_to' => $targetId], ['assigned_type' => 'station', 'assigned_to' => $stationId]);

    $source->delete();

    \StellarWP\DB\DB::commit();

    wp_redirect($_REQUEST['redirect']) && exit;
});

add_action('admin_post_delete_officer', function() {

    $officerId = absint( $_REQUEST['officer_id'] );

    check_admin_referer("delete_officer-$officerId");

    $officer = Officer::find($officerId);

    if(!$officer->delete()) {
        wp_die('Unable to delete officer ID ' . $officerId);
    }

    wp_redirect(@$_REQUEST['redirect'] ?? wp_get_referer()) && exit;
});

add_action('admin_post_delete_sergeant', function() {

    $sergeantId = absint( $_REQUEST['sergeant_id'] );

    check_admin_referer("delete_sergeant-$sergeantId");

    $sergeant = Sergeant::find($sergeantId);

    if(!$sergeant->delete()) {
        wp_die('Unable to delete sergeant ID ' . $sergeantId);
    }

    wp_redirect(@$_REQUEST['redirect'] ?? wp_get_referer()) && exit;
});



add_action('admin_post_delete_training_log', function() {

    $sessionLogId = absint( $_REQUEST['session_log_id'] );
    $recordLogId = absint( $_REQUEST['record_log_id'] );

    check_admin_referer("delete_training_log-$recordLogId");

    $record = TrainingRecord::find($recordLogId);
    if(!$record) {
        wp_die('Training record not found.');
    }

    if(!$record->delete()) {
        wp_die('Unable to delete training record ID ' . $recordLogId);
    }

    $session = TrainingSession::find($sessionLogId);
    // get all training records by session ID
    if(!$session) {
        // If the session is not found, we can still delete the record
        wp_redirect(@$_REQUEST['redirect'] ?? wp_get_referer()) && exit;
    }

    $trainingRecordsCount = TrainingRecord::query()
        ->where('sessionId', $session->id)
        ->count();

    if($trainingRecordsCount > 0) {
        // If there are still records associated with the session, we don't delete the session
        wp_redirect(@$_REQUEST['redirect'] ?? wp_get_referer()) && exit;
    }

    if(!$session) {
        wp_die('Training log not found.');
    }

    if(!$session->delete()) {
        wp_die('Unable to delete training log ID ' . $sessionLogId);
    }

    $records = TrainingRecord::query()->where('sessionId', $session->id)->getAll();
    foreach ($records as $record) {
        $record::delete();
    }

    wp_redirect(@$_REQUEST['redirect'] ?? wp_get_referer()) && exit;
});

add_action( 'admin_post_update_manager', function() {

    $manager = Manager::find(absint($_REQUEST['managerId']));
    $manager->firstName = sanitize_text_field( $_REQUEST['firstName'] );
    $manager->lastName = sanitize_text_field( $_REQUEST['lastName'] );
    $manager->emailAddress = sanitize_text_field( $_REQUEST['emailAddress'] );
    $manager->save();

    $station = isset($_REQUEST['stationId']) && $_REQUEST['stationId']
        ? Station::find(absint($_REQUEST['stationId']))
        : Station::where('agencyId', $manager->agency()->id)->first();

    switch ($_REQUEST['role']) {
        case 'student':
            (new ChangeManagerToStudent)($manager, $station);
            break;
        case 'facilitator':
            (new ChangeManagerToFacilitator)($manager, $station);
            break;
        default:
            $manager->save();
    }

    wp_redirect($_REQUEST['redirect']);
    exit;
} );
