<?php

global $wpdb;
require_once ABSPATH . 'wp-admin/includes/upgrade.php';

if (!function_exists('btn_add_index_if_missing')) {
    /**
     * Adds an index only if it doesn't already exist. dbDelta can add missing
     * indexes to an existing table via the KEY clauses above, but that path is
     * less reliable than its column-diffing, so this backs it up explicitly and
     * safely no-ops on repeat migration runs.
     */
    function btn_add_index_if_missing($table, $indexName, $columnExpr) {
        global $wpdb;

        $exists = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(1) FROM information_schema.STATISTICS WHERE table_schema = DATABASE() AND table_name = %s AND index_name = %s",
            $table,
            $indexName
        ));

        if (!$exists) {
            $wpdb->query("ALTER TABLE {$table} ADD INDEX {$indexName} ({$columnExpr})");

            if ($wpdb->last_error) {
                if (class_exists('WP_CLI')) {
                    WP_CLI::warning("Failed to add index {$indexName} on {$table}: {$wpdb->last_error}");
                } else {
                    error_log("btn_add_index_if_missing: failed to add index {$indexName} on {$table}: {$wpdb->last_error}");
                }
            } elseif (class_exists('WP_CLI')) {
                WP_CLI::line("Added index {$indexName} on {$table}");
            }
        }
    }
}

/**
 * Agencies Table
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_agencies (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        referenceId tinytext NULL,
        name tinytext NOT NULL,
        state tinytext NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) {$wpdb->get_charset_collate()};");

$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_agencies MODIFY referenceId tinytext NULL;");

/**
 * Stations Table
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_stations (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        agencyId mediumint(9) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY agencyId (agencyId)
    ) {$wpdb->get_charset_collate()};");

btn_add_index_if_missing("{$wpdb->prefix}btn_stations", 'agencyId', 'agencyId');

/**
 * Managers Table
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_managers (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        firstName tinytext NOT NULL,
        lastName tinytext NOT NULL,
        emailAddress tinytext NOT NULL,
        organizationId tinytext NULL COMMENT 'Relational column for the Agency table',
        userId mediumint(9) NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY userId (userId),
        KEY organizationId (organizationId(20))
    ) {$wpdb->get_charset_collate()};");

btn_add_index_if_missing("{$wpdb->prefix}btn_managers", 'userId', 'userId');
btn_add_index_if_missing("{$wpdb->prefix}btn_managers", 'organizationId', 'organizationId(20)');

/**
 * Sergeants Table
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_sergeants (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        firstName tinytext NOT NULL,
        lastName tinytext NOT NULL,
        emailAddress tinytext NOT NULL,
        organizationId tinytext NULL COMMENT 'Relational column for the Agency table',
        stationId tinytext NOT NULL,
        userId mediumint(9) NULL,
        `rank` tinytext NULL,
        badgeId tinytext NULL,
        stateId tinytext NULL,
        agencyId tinytext NULL COMMENT 'Personnel ID assigned by the Agency (not a relational column)',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY userId (userId),
        KEY stationId (stationId(20)),
        KEY organizationId (organizationId(20))
    ) {$wpdb->get_charset_collate()};");

$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_sergeants MODIFY agencyId tinytext NULL;");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_sergeants MODIFY organizationId tinytext NULL;");

btn_add_index_if_missing("{$wpdb->prefix}btn_sergeants", 'userId', 'userId');
btn_add_index_if_missing("{$wpdb->prefix}btn_sergeants", 'stationId', 'stationId(20)');
btn_add_index_if_missing("{$wpdb->prefix}btn_sergeants", 'organizationId', 'organizationId(20)');

/**
 * Officers Table
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_officers (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        firstName tinytext NOT NULL,
        lastName tinytext NOT NULL,
        emailAddress tinytext NOT NULL,
        badgeId tinytext NULL,
        stateId tinytext NOT NULL,
        agencyId tinytext NULL,
        stationId tinytext NOT NULL,
        `rank` tinytext NULL,
        userId mediumint(9) NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY userId (userId),
        KEY stationId (stationId(20))
    ) {$wpdb->get_charset_collate()};");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_officers MODIFY agencyId tinytext NULL;");

btn_add_index_if_missing("{$wpdb->prefix}btn_officers", 'userId', 'userId');
btn_add_index_if_missing("{$wpdb->prefix}btn_officers", 'stationId', 'stationId(20)');

/**
 * Training Sessions Table
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_training_sessions (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        trainingId mediumint(9) NOT NULL,
        userId mediumint(9) NOT NULL,
        stationId mediumint(9) NULL,
        managerId mediumint(9) NULL COMMENT 'DEPRECATED',
        sergeantId mediumint(9) NULL COMMENT 'DEPRECATED',
        officerId mediumint(9) NULL COMMENT 'DEPRECATED',
        duration mediumint(9) NOT NULL,
        completedAt timestamp NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY userId (userId),
        KEY stationId (stationId),
        KEY trainingId (trainingId),
        KEY completedAt (completedAt)
    ) {$wpdb->get_charset_collate()};");

$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_sessions MODIFY stationId mediumint(9) NULL;");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_sessions MODIFY managerId mediumint(9) NULL;");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_sessions MODIFY sergeantId mediumint(9) NULL;");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_sessions MODIFY officerId mediumint(9) NULL;");

btn_add_index_if_missing("{$wpdb->prefix}btn_training_sessions", 'userId', 'userId');
btn_add_index_if_missing("{$wpdb->prefix}btn_training_sessions", 'stationId', 'stationId');
btn_add_index_if_missing("{$wpdb->prefix}btn_training_sessions", 'trainingId', 'trainingId');
btn_add_index_if_missing("{$wpdb->prefix}btn_training_sessions", 'completedAt', 'completedAt');

/**
 * Training Record
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_training_records (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        sessionId mediumint(9) NOT NULL,
        userId mediumint(9) NOT NULL,
        officerId mediumint(9) NULL  COMMENT 'DEPRECATED',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY sessionId (sessionId),
        KEY userId (userId)
    ) {$wpdb->get_charset_collate()};");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_records MODIFY officerId mediumint(9) NULL;");

btn_add_index_if_missing("{$wpdb->prefix}btn_training_records", 'sessionId', 'sessionId');
btn_add_index_if_missing("{$wpdb->prefix}btn_training_records", 'userId', 'userId');

/**
 * User Login
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_user_login (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        userId mediumint(9) NOT NULL,
        loginAt timestamp NOT NULL,
        PRIMARY KEY (id),
        KEY userId (userId)
    ) {$wpdb->get_charset_collate()};");

btn_add_index_if_missing("{$wpdb->prefix}btn_user_login", 'userId', 'userId');
