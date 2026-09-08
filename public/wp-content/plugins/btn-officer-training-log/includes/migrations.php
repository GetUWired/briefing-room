<?php

global $wpdb;
require_once ABSPATH . 'wp-admin/includes/upgrade.php';

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
        PRIMARY KEY (id)
    ) {$wpdb->get_charset_collate()};");

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
        PRIMARY KEY (id)
    ) {$wpdb->get_charset_collate()};");

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
        PRIMARY KEY (id)
    ) {$wpdb->get_charset_collate()};");

$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_sergeants MODIFY agencyId tinytext NULL;");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_sergeants MODIFY organizationId tinytext NULL;");

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
        PRIMARY KEY (id)
    ) {$wpdb->get_charset_collate()};");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_officers MODIFY agencyId tinytext NULL;");

/**
 * Training Sessions Table
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_training_sessions (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        trainingId mediumint(9) NOT NULL,
        userId mediumint(9) NOT NULL,
        managerId mediumint(9) NULL COMMENT 'DEPRECATED',
        sergeantId mediumint(9) NULL COMMENT 'DEPRECATED',
        officerId mediumint(9) NULL COMMENT 'DEPRECATED',
        duration mediumint(9) NOT NULL,
        completedAt timestamp NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) {$wpdb->get_charset_collate()};");

$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_sessions MODIFY managerId mediumint(9) NULL;");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_sessions MODIFY sergeantId mediumint(9) NULL;");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_sessions MODIFY officerId mediumint(9) NULL;");

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
        PRIMARY KEY (id)
    ) {$wpdb->get_charset_collate()};");
$wpdb->query("ALTER TABLE {$wpdb->prefix}btn_training_records MODIFY officerId mediumint(9) NULL;");

/**
 * User Login
 */
dbDelta("CREATE TABLE {$wpdb->prefix}btn_user_login (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        userId mediumint(9) NOT NULL,
        loginAt timestamp NOT NULL,
        PRIMARY KEY (id)
    ) {$wpdb->get_charset_collate()};");
