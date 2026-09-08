<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Factories\ManagerFactory;
use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\SergeantFactory;
use BTN\BriefingRoom\Factories\StationFactory;
use BTN\BriefingRoom\Station;

WP_CLI::add_command( 'btn:migrate', function() {
    global $wpdb;

    WP_CLI::line('Running Briefing Room migrations...');
    include plugin_dir_path(__FILE__) . '/migrations.php';

    if ($wpdb->last_error) {
        WP_CLI::error("Migration finished with a database error: {$wpdb->last_error}");
    }

    WP_CLI::success('Migrations complete.');
});

WP_CLI::add_command( 'btn:fresh', function() {

    WP_CLI::confirm( 'Are you sure you want to truncate all Briefing Room tables?' );

    $tables = array_map([\StellarWP\DB\DB::class, 'prefix'], [
        'btn_agencies',
        'btn_stations',
        'btn_managers',
        'btn_sergeants',
        'btn_officers',
        'btn_training_sessions',
        'btn_training_records',
        'btn_sergeant_logins',
    ]);

    foreach( $tables as $table) {
        WP_CLI::line( "Truncating table $table..." );
        \StellarWP\DB\DB::query("TRUNCATE TABLE $table");
    }

    WP_CLI::success( 'All Briefing Room tables have been truncated.' );
});

WP_CLI::add_command( 'btn:create-managers', function() {
    $users = get_users(['role' => \BTN\BriefingRoom\Manager::ROLE]);
    foreach( $users as $user ) {
        wp_set_current_user($user->ID);
        $manager = (new \BTN\BriefingRoom\Actions\CreateManager)(
            $user,
            \BTN\BriefingRoom\Helpers\Memberium::getContactField('_AgencyID')
        );
        WP_CLI::line("Created manager for {$user->display_name} ({$manager->id})");
    }
    WP_CLI::success('Done');
});

WP_CLI::add_command( 'btn:migrate-user-relational-ids', function() {
    global $wpdb;
    WP_CLI::line("Migrating user relational IDs for Training Sessions and Training Records");

    $migration = new \BTN\BriefingRoom\Actions\MigrateIdentifiersToUserId($wpdb);

    /**
     * Migrate Officers (Students)
     */
    $officers = \BTN\BriefingRoom\Officer::all();
    $progress = \WP_CLI\Utils\make_progress_bar("Migrating student (officer) relational IDs", count($officers->models) );
    foreach($officers->models as $officer) {
        $migration->migrate('btn_training_records','officerId', $officer);
        $migration->migrate('btn_training_sessions','officerId', $officer);
        $progress->tick();
    }
    $progress->finish();

    /**
     * Migrate Sergeants (Facilitators)
     */
    $sergeants = \BTN\BriefingRoom\Sergeant::all();
    $progress = \WP_CLI\Utils\make_progress_bar("Migrating facilitator (sergeant) relational IDs", count($sergeants->models) );
    foreach($sergeants->models as $sergeant) {
        $migration->migrate('btn_training_sessions','sergeantId', $sergeant);
        $progress->tick();
    }
    $progress->finish();

    /**
     * Migrate Mangers
     */
    $managers = \BTN\BriefingRoom\Manager::all();
    $progress = \WP_CLI\Utils\make_progress_bar("Migrating manager relational IDs", count($managers->models) );
    foreach($managers->models as $manager) {
        $migration->migrate('btn_training_sessions','managerId', $manager);
        $progress->tick();
    }
    $progress->finish();

    WP_CLI::success('Done');
});

WP_CLI::add_command( 'btn:backfill-session-stations', function() {
    WP_CLI::line("Backfilling stationId on existing Training Sessions");

    $sessions = \BTN\BriefingRoom\TrainingSession::all()->models;
    $pending = array_filter($sessions, fn($session) => $session->stationId === null);

    $progress = \WP_CLI\Utils\make_progress_bar("Backfilling session stations", count($pending));
    $unresolved = 0;

    foreach ($pending as $session) {
        $session->stationId = resolve_station_id_for_user($session->userId);

        if ($session->stationId === null) {
            $unresolved++;
        }

        $session->save();
        $progress->tick();
    }
    $progress->finish();

    if ($unresolved > 0) {
        WP_CLI::warning("$unresolved session(s) could not be resolved to a station (no matching Officer/Sergeant record for the recording user) and were left as NULL.");
    }

    WP_CLI::success('Done');
});

WP_CLI::add_command( 'btn:seed', function() {

    AgencyFactory::create([
        'name' => 'Cleveland Police Department',
        'state' => 'TN',
    ])->tap(function(Agency $agency) {

        ManagerFactory::create([
            'firstName' => 'Mark',
            'lastName' => 'Gibson',
            'emailAddress' => 'mark.gibson@clevelandtn.test',
            'organizationId' => $agency->id,
            'userId' => wp_insert_user([
                'user_pass' => wp_generate_password(),
                'user_login' => 'mark.gibson.' . time(),
                'role' => 'memberium_stationadmin',
            ])
        ]);

        StationFactory::create([
            'name' => 'Operations Bureau',
            'agencyId' => $agency->id,
        ])->tap(function(Station $station) {

            SergeantFactory::create([
                'stationId' => $station->id,
                'firstName' => 'Matt',
                'lastName' => 'Jenkins',
                'emailAddress' => 'matt.jenkins@clevelandtn.test',
                'rank' => 'sergeant',
                'userId' => wp_insert_user([
                    'user_pass' => wp_generate_password(),
                    'user_login' => 'matt.jenkins.' . time(),
                    'role' => 'btn_briefing_room_sergeant',
                ])
            ]);

            OfficerFactory::create([
                'stationId' => $station->id,
                'firstName' => 'John',
                'lastName' => 'Doe',
                'email' => 'john.doe@clevelandtn.test',
                'badgeId' => 'bg-1234',
                'stateId' => 'st-1234',
                'agencyId' => 'ag-1234', // Personnel ID assigned by the Agency (not a relational model ID)
                'rank' => 'officer',
                'userId' => wp_insert_user([
                    'user_pass' => wp_generate_password(),
                    'user_login' => 'john.doe.' . time(),
                    'role' => 'btn_briefing_room_officer',
                ])
            ]);
        });

        StationFactory::create([
            'name' => 'Support Services Bureau',
            'agencyId' => $agency->id,
        ])->tap(function(Station $station) {

            SergeantFactory::create([
                'stationId' => $station->id,
                'firstName' => 'Travis',
                'lastName' => 'Weber',
                'emailAddress' => 'travis.webber@clevelandtn.test',
                'rank' => 'sergeant',
                'userId' => wp_insert_user([
                    'user_pass' => wp_generate_password(),
                    'user_login' => 'travis.weber.' . time(),
                    'role' => 'btn_briefing_room_sergeant',
                ])
            ]);

            OfficerFactory::create([
                'stationId' => $station->id,
                'firstName' => 'Jane',
                'lastName' => 'Doe',
                'email' => 'jane.doe@clevelandtn.test',
                'badgeId' => 'bg-2345',
                'stateId' => 'st-2345',
                'agencyId' => 'ag-2345', // Personnel ID assigned by the Agency (not a relational model ID)
                'rank' => 'officer',
                'userId' => wp_insert_user([
                    'user_pass' => wp_generate_password(),
                    'user_login' => 'jane.doe.' . time(),
                    'role' => 'btn_briefing_room_officer',
                ])
            ]);
        });
    });
});
