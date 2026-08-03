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
use StellarWP\DB\DB;
use StellarWP\DB\QueryBuilder\QueryBuilder;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\WhereQueryBuilder;
use BTN\BriefingRoom\UserLogin;


add_action('wp_enqueue_scripts', function () {

    wp_enqueue_script( 'rest-loader', plugin_dir_url( __FILE__ ) . 'js/rest-loader.js', array( 'jquery' ), time(), true );

	wp_localize_script( 'rest-loader', 'CONTENT_LOADER', array(
			'root' => esc_url_raw( rest_url() ),
			'nonce' => wp_create_nonce( 'wp_rest' ),
			'current_user_id' => get_current_user_id()
		)
	);

});

add_action('rest_api_init', function () {

    register_rest_route('briefingroom/v1', '/get_sessions_report', array(
        'methods'  => 'POST',
        'callback' => 'get_sessions_report',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/get_students_report', array(
        'methods'  => 'POST',
        'callback' => 'get_students_report',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/get_facilitators_report', array(
        'methods'  => 'POST',
        'callback' => 'get_facilitators_report',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    // register_rest_route('briefingroom/v1', '/get_stations_report', array(
    //     'methods'  => 'POST',
    //     'callback' => 'get_stations_report',
    //     'permission_callback' => function () {
    //         return current_user_can( 'read' ); // User has to be logged in to use the endpoint
    //     },
    // ));


});


function get_sessions_report()
{

    $agency_id = Memberium::getContactField('_AgencyID'); 
    $startDate = $_REQUEST['startDate'] ?? null;
    $endDate = $_REQUEST['endDate'] ?? null;
    $page = isset($_REQUEST['report_page']) ? absint($_REQUEST['report_page']) : 1;
    $search = $_REQUEST['search'] ?? null;
    $sort = $_REQUEST['sort'] ?? null;
    // $sortby = $_REQUEST['sortby'] ?? null;

    $data = get_session_report_data($agency_id, $startDate, $endDate, $page, $search, $sort);

    $sessions = generate_session_rows($data['sessions']);

	$response = [
		'message' => 'Report generated successfully',
		'status' => 'success',
        'data' => $data,
        'sessions' =>$sessions,
	];

	return new WP_REST_Response($response);
}

function get_session_report_data($agency_id = null, $startDate = null, $endDate = null, $page = 0, $search = null, $sort = null){

    if(!$agency_id){
        $agency_id = Memberium::getContactField('_AgencyID'); 
    }

    if( ! $agency_id ) return [];

    $query = TrainingSession::query();

    $currentPage = ( isset($page) && $page != '' ) ? absint($page) : 1;
    $nextPage = $currentPage + 1;
    $perPage = 25;

    // Subquery for user IDs
    $query->joinRaw( "INNER JOIN (SELECT userId FROM wp_btn_managers WHERE organizationId = {$agency_id}
    UNION
    SELECT facilitator.userId 
    FROM wp_btn_sergeants facilitator
    JOIN wp_btn_stations station ON facilitator.stationId = station.id
    WHERE station.agencyId =  {$agency_id}
    UNION
    SELECT student.userId 
    FROM wp_btn_officers student
    JOIN wp_btn_stations station ON student.stationId = station.id
    WHERE station.agencyId = {$agency_id}) as user_ids ON user_ids.userId=trainingsession.userId" );

    $query->leftJoin('posts', 'trainingsession.trainingId', 'training.ID', 'training')
        ->leftJoin(Sergeant::getTable(), 'facilitator.userId', 'trainingsession.userId', 'facilitator')
        ->leftJoin(Manager::getTable(), 'manager.userId', 'trainingsession.userId', 'manager')
        ->leftJoin(Officer::getTable(), 'student.userId', 'trainingsession.userId', 'student');

    // Date filter
    if (isset($startDate) && $startDate != null) {
        $query->where('trainingsession.completedAt', $startDate, '>=');
    }

    if (isset($endDate) && $endDate != null) {
        $query->where('trainingsession.completedAt', $endDate, '<=');
    }
    
    // SEARCH BY  NAME
    if (!empty($search)) {
        $search = DB::esc_like($search);
        $query->whereLike('post_title', $search);
    }


    $countQuery = clone $query;
    $dataQuery = clone $query;

    $countResult = $countQuery->selectRaw('SELECT COUNT(DISTINCT trainingsession.id) as total')->getAll();

    $dataQuery->selectRaw("SELECT 
        trainingsession.*,
        training.post_title AS post_title,
        facilitator.firstName AS facilitator_fname,
        facilitator.lastName AS facilitator_lname,
        manager.firstName AS manager_fname,
        manager.lastName AS manager_lname,
        student.firstName AS student_fname,
        student.lastName AS student_lname,
        COALESCE(
            NULLIF(CONCAT_WS(' ', facilitator.firstName, facilitator.lastName), ''),
            NULLIF(CONCAT_WS(' ', manager.firstName, manager.lastName), ''),
            NULLIF(CONCAT_WS(' ', student.firstName, student.lastName), '')
        ) AS facilitator");

    $dataQuery->groupBy('trainingsession.id');
    
    $total = $countResult[0]->total ?? 0;

    // SORT BY ID OR NAME
    if (!empty($_REQUEST['sort'])) {
        [$sortColumn, $sortDirection] = explode(',', $sort);
        $allowedSortColumns = ['trainingsession.id', 'post_title', 'completedAt', 'facilitator', 'duration'];
        $dataQuery->orderBy(
            in_array($sortColumn, $allowedSortColumns, true) ? $sortColumn : 'trainingsession.id',
            in_array($sortDirection, ['ASC', 'DESC'], true) ? $sortDirection : 'DESC'
        );
    } else {
        $dataQuery->orderBy( 'trainingsession.completedAt','DESC' );
        $sortDirection = 'DESC';
    }
    

    $dataQuery->orderBy( 'trainingsession.id','ASC' );

    $querySQL = $dataQuery->getSQL();
    
    $numPages = ceil($total / $perPage);

    // Fetch and process results

    $sessions = $dataQuery->limit($perPage)->offset(($currentPage - 1) * $perPage)->getAll();

    $results = [
        'sessions' => $sessions,
        'total' => $total,
        'numPages' => $numPages,
        'currentPage' => $currentPage,
        'nextPage' => $nextPage <= $numPages ? $nextPage : null,
        'sort' => $sortDirection ?? 'DESC',
        'querySQL' => $querySQL
    ];

    return $results;
}

function generate_session_rows($sessions){
    
    $sessionRows = [];
    $loadedSessionIds = [];

    if( !empty( $sessions ) ) {
        foreach( $sessions as $data ) {
            $loadedSessionIds[] = $data->id;
        }

        $countQuery = TrainingSession::query()->selectRaw('SELECT trainingsession.id, count(*) as cnt')
            ->innerJoin( TrainingRecord::getTable(), 'trainingrecord.sessionId', 'trainingsession.id', 'trainingrecord' )
            ->whereIn('trainingsession.id', $loadedSessionIds )
            ->where('trainingrecord.userId', 0, '>')
            ->groupBy('trainingsession.id');


        $studentCountRows =  $countQuery->getAll();
        $sessionCounts = [];
        if( ! empty( $studentCountRows ) ) {
            foreach( $studentCountRows as $row ) {
                $sessionCounts[ $row->id ] = $row->cnt;
            }
        }

        foreach( $sessions as $data ) {
            
            $session = new TrainingSession(get_object_vars($data));

            $reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('session', $session->id);
            $reportUrl->tap(function($url) {
                if(!empty($_GET['startDate'])) $url->addArg('startDate', $_GET['startDate']);
                if(!empty($_GET['endDate'])) $url->addArg('endDate', $_GET['endDate']);
            }); 
        
            $sessionRows[] = [
                'select_all_item_session' => '<input type="checkbox" name="select_all_item_session[]" value="'.$session->id.'">',
                'id' => $session->id,
                'completedAt' => date('m/d/Y', strtotime( $session->completedAt ) ),
                'post_title' => $data->post_title,
                'facilitator' => $data->facilitator,
                'duration' => TimeFormatter::minutesToHours($session->duration()),
                'officers' => isset( $sessionCounts[$data->id] ) ? $sessionCounts[$data->id] : 0,
                'action' => implode(' ', [
                    "<a href='{$reportUrl->getCsvUrl()}'>CSV</a>",
                    "<a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>",
                ])
            ]; 
        }

    }

    return $sessionRows;
}



function get_students_report()
{

    $agency_id = Memberium::getContactField('_AgencyID'); 
    $stationId = $_REQUEST['stID'] ?? null;
    $startDate = $_REQUEST['startDate'] ?? null;
    $endDate = $_REQUEST['endDate'] ?? null;
    $page = isset($_REQUEST['report_page']) ? absint($_REQUEST['report_page']) : 1;
    $search = $_REQUEST['search'] ?? null;
    $sort = $_REQUEST['sort'] ?? null;
    // $sortby = $_REQUEST['sortby'] ?? null;

    $data = get_student_report_data($agency_id, $stationId, $startDate, $endDate, $page, $search, $sort);

	$response = [
		'message' => 'Report generated successfully',
		'status' => 'success',
        'data' => $data,
	];

	return new WP_REST_Response($response);
}

function get_student_report_data($agency_id = null, $stationId = null, $startDate = null, $endDate = null, $page = 0, $search = null, $sort = null){

    $currentPage = ( isset($page) && $page != '' ) ? absint($page) : 1;
    $nextPage = $currentPage +1;
    $perPage = 25;

    $officer_data = get_officer_data($agency_id, $stationId, $startDate, $endDate, $page, $search, $sort);
    $sergeant_data = get_sergeant_data($agency_id, $stationId, $startDate, $endDate, $page, $search, $sort);

    $officerRows =  generate_officer_rows($officer_data['officers']);
    $sergeantRows = generate_sergeant_rows($sergeant_data['sergeants']);

    $rows = [...$officerRows, ...$sergeantRows];

    $totalCount = $officer_data['totalOfficers'] + $sergeant_data['totalSergeants'];
    $pageCount = max(1, ceil($totalCount / $perPage));
    $rows = array_slice($rows, 0, $perPage); // already limited by queries

    $results = [
        'students' => $rows,
        'total' => $totalCount,
        'numPages' => $pageCount,
        'currentPage' => $currentPage,
        'nextPage' => $nextPage <= $pageCount ? $nextPage : null,
        'sort' => $officer_data['sort'] ?? 'DESC',
    ];

    return $results;

}


function get_officer_data($agency_id = null, $stationId = null, $startDate = null, $endDate = null, $page = 0, $search = null, $sort = null){

    $currentPage = ( isset($page) && $page != '' ) ? absint($page) : 1;
    $nextPage = $currentPage + 1;
    $perPage = 25;
    /* -------------------------
    * Officers Query
    * ------------------------ */
    if(!$agency_id){
        $agency_id = Memberium::getContactField('_AgencyID'); 
    }

    $officerQuery = Officer::query()->where('stationAgencyId', $agency_id);

    if (!empty($stationId)) {
        $officerQuery->where('officer.stationId', $stationId, '=');
    }

    // JOIN STATION NAME
    $officerQuery->join(function (JoinQueryBuilder $builder) {
        $stationQuery = Station::query()
            ->select(['id as station_id,name AS stationName, agencyId as stationAgencyId']);
        $builder->joinRaw("LEFT JOIN ({$stationQuery->getSQL()}) station ON officer.stationId = station_id");
    });

    // JOIN TRAINING SESSIONS
    $officerQuery->join(function (JoinQueryBuilder $builder) use ($startDate, $endDate) {
        $whereClauses = [];
        if ($startDate) $whereClauses[] = "trainingsession.completedAt >= '" . esc_sql($startDate) . "'";
        if ($endDate) $whereClauses[] = "trainingsession.completedAt <= '" . esc_sql($endDate) . "'";
        $whereSql = $whereClauses ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

        $subquery = "
            SELECT record.userId,
                SUM(duration) AS totalDuration,
                COUNT(*) AS trainingSessionCount
            FROM wp_btn_training_sessions AS trainingsession
            INNER JOIN wp_btn_training_records AS record
            ON trainingsession.id = record.sessionId
            {$whereSql}
            GROUP BY record.userId
        ";

        $builder->joinRaw("LEFT JOIN ({$subquery}) training ON officer.userId = training.userId");
    });

    // Search
    if (!empty($search)) {
        $officerQuery->where(function($query) use ($search) {
            $query->whereLike('officer.firstName', $search)
                ->orWhereLike('officer.lastName', $search);
        });
    }

    // Sort
    if (!empty($sort)) {
        [$sortColumn, $sortDirection] = explode(',', $sort);
        $allowedSortColumns = ['id', 'firstName', 'totalDuration', 'trainingSessionCount'];
        $officerQuery->orderBy(
            in_array($sortColumn, $allowedSortColumns, true) ? $sortColumn : 'id',
            in_array($sortDirection, ['ASC', 'DESC'], true) ? $sortDirection : 'DESC'
        );
    } else {
        $officerQuery->orderBy('totalDuration','DESC');
        $sortDirection = 'DESC';
    }

    // Get total count for pagination
    $officerTotal = clone $officerQuery;
    $totalOfficers = count($officerTotal->getAll());

    // Apply limit and offset
    $officers = $officerQuery->limit($perPage)->offset(($currentPage - 1) * $perPage)->getAll();

    $numPages = ceil($totalOfficers / $perPage);

    $results = [
        'officers' => $officers,
        'totalOfficers' => $totalOfficers,
        'numPages' => $numPages,
        'currentPage' => $currentPage,
        'nextPage' => $nextPage <= $numPages ? $nextPage : null,
        'sort' => $sortDirection ?? 'DESC',
    ];
    
    return $results;
}

function get_sergeant_data($agency_id = null, $stationId = null, $startDate = null, $endDate = null, $page = 0, $search = null, $sort = null){
    $currentPage = ( isset($page) && $page != '' ) ? absint($page) : 1;
    $nextPage = $currentPage + 1;
    $perPage = 25;

    if(!$agency_id){
        $agency_id = Memberium::getContactField('_AgencyID'); 
    }

    /* -------------------------
    * Sergeants Query
    * ------------------------ */
    $sergeantQuery = Sergeant::query()->where('stationAgencyId', $agency_id);

    if (!empty($stationId)) {
        $sergeantQuery->where('sergeant.stationId', $stationId, '=');
    }

    // JOIN STATION NAME
    $sergeantQuery->join(function (JoinQueryBuilder $builder) {
        $stationQuery = Station::query()
            ->select(['id as station_id,name AS stationName, agencyId as stationAgencyId']);
        $builder->joinRaw("LEFT JOIN ({$stationQuery->getSQL()}) station ON sergeant.stationId = station_id");
    });

    // JOIN TRAINING SESSIONS
    $sergeantQuery->join(function (JoinQueryBuilder $builder) use ($startDate, $endDate) {
        $whereClauses = [];
        if ($startDate) $whereClauses[] = "trainingsession.completedAt >= '" . esc_sql($startDate) . "'";
        if ($endDate) $whereClauses[] = "trainingsession.completedAt <= '" . esc_sql($endDate) . "'";
        $whereSql = $whereClauses ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

        $subquery = "
            SELECT record.userId,
                SUM(duration) AS totalDuration,
                COUNT(*) AS trainingSessionCount
            FROM wp_btn_training_sessions AS trainingsession
            INNER JOIN wp_btn_training_records AS record
            ON trainingsession.id = record.sessionId
            {$whereSql}
            GROUP BY record.userId
        ";

        $builder->joinRaw("LEFT JOIN ({$subquery}) training ON sergeant.userId = training.userId");
    });

    // Search
    if (!empty($search)) {
        $sergeantQuery->where(function($query) use ($search) {
            $query->whereLike('sergeant.firstName', $search)
                ->orWhereLike('sergeant.lastName', $search);
        });
    }

    // Sort
    if (!empty($sort)) {
        [$sortColumn, $sortDirection] = explode(',', $sort);
        $allowedSortColumns = ['id', 'firstName', 'totalDuration', 'trainingSessionCount'];
        $sergeantQuery->orderBy(
            in_array($sortColumn, $allowedSortColumns, true) ? $sortColumn : 'id',
            in_array($sortDirection, ['ASC', 'DESC'], true) ? $sortDirection : 'DESC'
        );
    } else {
        $sergeantQuery->orderBy('totalDuration','DESC');
        $sortDirection = 'DESC';
    }

    // Get total count for pagination
    $sergeantTotal = clone $sergeantQuery;
    $totalSergeants = count($sergeantTotal->getAll());

    // Apply limit and offset
    $sergeants = $sergeantQuery->limit($perPage)->offset(($currentPage - 1) * $perPage)->getAll();


    $numPages = ceil($totalOfficers / $perPage);

    $results = [
        'sergeants' => $sergeants,
        'totalSergeants' => $totalSergeants,
        'numPages' => $numPages,
        'currentPage' => $currentPage,
        'nextPage' => $nextPage <= $numPages ? $nextPage : null,
        'sort' => $sortDirection ?? 'DESC',
    ];

    return $results;

}


function generate_officer_rows($officers){

    $officerRows = array_map(function($officer) {
        $reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('student', $officer->id);
        $reportUrl->tap(function($url) {
            if(!empty($_REQUEST['startDate'])) $url->addArg('startDate', $_REQUEST['startDate']);
            if(!empty($_REQUEST['endDate'])) $url->addArg('endDate', $_REQUEST['endDate']);
        });
        return [
            'id' => $officer->id,
            'sortId' => $officer->userId,
            'sortName' => $officer->lastName . ', ' . $officer->firstName,
            'officerName' => $officer->firstName . ' ' . $officer->lastName . '<br><span class="wrapper-station-row">'.$officer->stationName.'</span>',
            'totalDuration' => TimeFormatter::minutesToHours($officer->totalDuration),
            'trainingSessionCount' => $officer->trainingSessionCount,
            'action' => "<div class='wrapper-csv-pdf'>
                            <a href='{$reportUrl->getCsvUrl()}'>CSV</a>
                            <a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>
                        </div>"
        ];
    }, $officers);

    return $officerRows;
}

function generate_sergeant_rows($sergeants){

    $sergeantRows = array_map(function($sergeant) {
        $reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('facilitator', $sergeant->id);
        $reportUrl->tap(function($url) {
            if(!empty($_REQUEST['startDate'])) $url->addArg('startDate', $_REQUEST['startDate']);
            if(!empty($_REQUEST['endDate'])) $url->addArg('endDate', $_REQUEST['endDate']);
        });
        return [
            'id' => $sergeant->id,
            'sortId' => $sergeant->userId,
            'sortName' => $sergeant->lastName . ', ' . $sergeant->firstName,
            'officerName' => $sergeant->firstName . ' ' . $sergeant->lastName . '<br><span class="wrapper-station-row">'.$sergeant->stationName.'</span>',
            'totalDuration' => TimeFormatter::minutesToHours($sergeant->totalDuration),
            'trainingSessionCount' => $sergeant->trainingSessionCount,
            'action' => "<div class='wrapper-csv-pdf'>
                            <a href='{$reportUrl->getCsvUrl()}'>CSV</a>
                            <a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>
                        </div>"
        ];
    }, $sergeants);

    return $sergeantRows;
    
}

// Facilitator can be user role facilitator (sergeant), manager, or student (officer) - only one will have the name fileds filled in
// function getFacilitatorName( $data ) {
// 	if( $data->facilitator_fname != '' ) {
// 		return $data->facilitator_fname . ' ' . $data->facilitator_lname;
// 	} elseif( $data->manager_fname != '' ) {
// 		return $data->manager_fname . ' ' . $data->manager_lname;
// 	} elseif( $data->student_fname != '' ) {
// 		return $data->student_fname . ' ' . $data->student_lname;
// 	} else return '';
// }



function get_facilitators_report() {

    $agency_id = Memberium::getContactField('_AgencyID');
    $startDate = $_REQUEST['startDate'] ?? null;
    $endDate = $_REQUEST['endDate'] ?? null;
    $page = isset($_REQUEST['report_page']) ? absint($_REQUEST['report_page']) : 1;
    $search = $_REQUEST['search'] ?? null;
    $sort = $_REQUEST['sort'] ?? null;
    $stationId = $_REQUEST['stID'] ?? null;

    $data = get_facilitator_report_data($agency_id, $stationId, $startDate, $endDate, $page, $search, $sort);

    $rows = generate_facilitator_rows($data['rows']);

    $response = [
        'message' => 'Facilitator report generated',
        'status'  => 'success',
        'data'    => $data,
        'facilitators'    => $rows,
        'agency_id'    => $agency_id,
    ];

    return new WP_REST_Response($response);
}


function get_facilitator_report_data($agency_id = null, $stationId = null, $startDate = null, $endDate = null, $page = 1, $search = null, $sort = null)
{
    if (!$agency_id) {
        $agency_id = Memberium::getContactField('_AgencyID');
    }

    if (!$agency_id) {
        return [
            'rows' => [],
            'total' => 0,
            'numPages' => 0,
            'currentPage' => 1,
            'nextPage' => null,
            'perPage' => 25,
            'sortColumn' => null,
            'sortDirection' => 'DESC',
        ];
    }

    $currentPage = $page ? absint($page) : 1;
    $perPage = 25;

    //
    // --- Sergeant query ---
    //
    $sQuery = Sergeant::query();
    $sQuery->where('agency.id', $agency_id);
    $sQuery->select(
        'sergeant.*',
        'trainingSession.sessionCount',
        'trainingSession.trainingTime',
        'login.lastLogin',
        ['agency.name', 'agencyName']
    );

    if (!empty($stationId)) {
        $sQuery->where('sergeant.stationId', $stationId);
    }

    $sQuery->join(function(JoinQueryBuilder $builder) {
        $builder->leftJoin(Station::getTable(), 'station')->on('sergeant.stationId', 'station.id');
        $builder->leftJoin(Agency::getTable(), 'agency')->on('station.agencyId', 'agency.id');
    });

    $sQuery = Sergeant::withLastLogin($sQuery);
    $sQuery = Sergeant::withTrainingTime($sQuery, function(QueryBuilder $q) use ($startDate, $endDate) {
        if ($startDate && $endDate) {
            $q->whereBetween('completedAt', $startDate, $endDate);
        } elseif ($startDate) {
            $q->where('completedAt', $startDate, '>=');
        } elseif ($endDate) {
            $q->where('completedAt', $endDate, '<');
        }
    });

    if (!empty($search)) {
        $s = DB::esc_like($search);
        $sQuery->where(function ($q) use ($s) {
            $q->whereLike('firstName', $s)
            ->orWhereLike('lastName', $s);
        });
    }

    $sergeantRows = $sQuery->getAll();

    //
    // --- Manager query ---
    //
    $mQuery = Manager::query()
        ->select(
            'manager.*',
            'trainingSession.sessionCount',
            'trainingSession.trainingTime',
            'login.lastLogin'
        )
        ->where('organizationId', $agency_id)
        ->join(function (JoinQueryBuilder $builder) {
            $q = UserLogin::query()->selectRaw('SELECT userId, MAX(loginAt) as lastLogin')->groupBy('userId');
            $builder->joinRaw("LEFT JOIN ({$q->getSQL()}) login ON manager.userId = login.userId");
        })
        ->join(function (JoinQueryBuilder $builder) use ($startDate, $endDate) {
            $q = TrainingSession::query()->selectRaw('SELECT userId, COUNT(*) as sessionCount, SUM(duration) as trainingTime')->groupBy('userId');
            if ($startDate) $q->where('completedAt', $startDate, '>=');
            if ($endDate) $q->where('completedAt', $endDate, '<');
            $builder->joinRaw("LEFT JOIN ({$q->getSQL()}) trainingSession ON manager.userId = trainingSession.userId");
        });

    if (!empty($search)) {
        $s = DB::esc_like($search);
        $mQuery->where(function ($q) use ($s) {
            $q->whereLike('firstName', $s)
            ->orWhereLike('lastName', $s);
        });

    }

    $managerRows = $mQuery->getAll();

    //
    // --- Combine rows ---
    //
    $allRows = array_merge($managerRows, $sergeantRows);

    //
    // --- Sorting ---
    //
    $sortColumn = null;
    $sortDirection = 'DESC';

    // Parse incoming "$sort"
    if (!empty($sort)) {
        $parts = explode(',', $sort);
        $sortColumn = trim($parts[0]);
        if (!empty($parts[1])) {
            $sortDirection = strtoupper(trim($parts[1])) === 'ASC' ? 'ASC' : 'DESC';
        }
    }

    // Allowed fields (adjust "name" if needed)
    $allowedSorts = [
        'sessionCount',
        'trainingTime',
        'lastLogin',
        'id',
        'name'         => 'agencyName', // Fix ambiguous "name"
        'agencyName'
    ];

    // Fix mapping if user chose "name"
    if ($sortColumn === 'name') {
        $sortColumn = 'agencyName';
    }

    if ($sortColumn && in_array($sortColumn, $allowedSorts, true)) {
        usort($allRows, function($a, $b) use ($sortColumn, $sortDirection) {
            $va = $a->{$sortColumn} ?? null;
            $vb = $b->{$sortColumn} ?? null;

            // date → timestamp
            if ($sortColumn === 'lastLogin') {
                $va = $va ? strtotime($va) : 0;
                $vb = $vb ? strtotime($vb) : 0;
            }

            // numeric?
            if (is_numeric($va) && is_numeric($vb)) {
                $cmp = $va <=> $vb;
            } else {
                $cmp = strcasecmp((string)$va, (string)$vb);
            }

            return $sortDirection === 'ASC' ? $cmp : -$cmp;
        });
    } else {
        // Default sort by trainingTime DESC
        usort($allRows, function($a, $b) {
            $va = $a->trainingTime ?? 0;
            $vb = $b->trainingTime ?? 0;
            return $vb <=> $va;
        });
        $sortColumn = 'trainingTime';
        $sortDirection = 'DESC';    
    }

    //
    // --- Pagination ---
    //
    $total = count($allRows);
    $numPages = max(1, (int) ceil($total / $perPage));
    $currentPage = min(max(1, $currentPage), $numPages);
    $offset = ($currentPage - 1) * $perPage;

    $pagedRows = array_slice($allRows, $offset, $perPage);

    //
    // --- Response ---
    //
    return [
        'rows' => $pagedRows,
        'total' => $total,
        'numPages' => $numPages,
        'currentPage' => $currentPage,
        'nextPage' => $currentPage < $numPages ? $currentPage + 1 : null,
        'perPage' => $perPage,
        'sortColumn' => $sortColumn,
        'sortDirection' => $sortDirection,
        'sQuery' => $sQuery->getSQL(),
        'mQuery' => $mQuery->getSQL(),

    ];
}



function generate_facilitator_rows($rows)
{
    if (empty($rows)) return [];

    $output = [];

    foreach ($rows as $data) {

//         $output[] = get_userdata( $data->userId );
// ;
//         continue;

        if(user_has_role_by_id( $data->userId, 'memberium_stationadmin' )){
            $person = new Manager(get_object_vars($data));
            $station = null;

            $link = new \BTN\BriefingRoom\Reports\LinkBuilder('manager', $person->id);

        } else if (user_has_role_by_id( $data->userId, 'memberium_sergeant' )) {
            $person = new Sergeant(get_object_vars($data));
            if ($data->stationId){
                $station = Station::find($data->stationId);
            } else {
                $station = null;
            }

            $link = new \BTN\BriefingRoom\Reports\LinkBuilder('facilitator', $person->id);
        } else {
            // Skip if neither manager nor sergeant
            continue;
        }

        $link->tap(function($url) {
            if (!empty($_GET['startDate'])) $url->addArg('startDate', $_GET['startDate']);
            if (!empty($_GET['endDate'])) $url->addArg('endDate', $_GET['endDate']);
        });

        $output[] = [
            'id' => $person->id,
            'name' => '<b class="name-wrapper">' . $person->name() . '</b>' . 
                      ($station ? "<br><span class='wrapper-station-row'>{$station->name}</span>" : ''),
            'sessionCount' => $data->sessionCount ?? 0,
            'trainingTime' => TimeFormatter::minutesToHours($data->trainingTime),
            'lastLogin' => $data->lastLogin ? date('F j, Y', strtotime($data->lastLogin)) : '-',
            'action' => "<div class='wrapper-csv-pdf'>
                            <a href='{$link->getCsvUrl()}'>CSV</a>
                            <a href='{$link->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>
                         </div>",
        ];
    }

    return $output;
}



function generateWeekSelect($id = 'weekSelect') {
    $today = new DateTime();
    
    // Find start of this week (Monday)
    $weekStart = clone $today;
    $weekStart->modify('monday this week');

    echo "<select id=\"$id\">\n";
    echo "<option value=\"\">Select Week</option>\n";

    for ($i = 0; $i < 12; $i++) {
        $start = clone $weekStart;
        $start->modify("-{$i} week");
        $end = clone $start;
        $end->modify('+6 days');

        $value = $start->format('Y-m-d') . ',' . $end->format('Y-m-d');
        $label = $start->format('m/d/y') . ' - ' . $end->format('m/d/y');

        echo "<option value=\"$value\">$label</option>\n";
    }

    echo '</select><button type="button" onclick="weekReport()">Weekly CSV Report</button>';
}

// add_shortcode('briefing_room_admin_session_reporting', function() {
//     return '<div id="session_report_container"></div>';
// });


function user_has_role_by_id( $user_id, $role ) {
    $user = get_userdata( $user_id );

    if ( ! $user ) {
        return false; // User not found
    }

    // Get all roles assigned to the user
    $user_roles = $user->roles;

    // Check if the specified role is in the user's roles array
    return in_array( $role, $user_roles, true );
}
