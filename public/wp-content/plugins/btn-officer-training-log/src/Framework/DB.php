<?php

namespace BTN\BriefingRoom\Framework;

/**
 * @method static get_results(string $query)
 */
class DB
{
    public static function prefix($table)
    {
        global $wpdb;
        return $wpdb->prefix . $table;
    }

    public static function insert_id()
    {
        global $wpdb;
        return $wpdb->insert_id;
    }

    public static function __callStatic($method, $args)
    {
        global $wpdb;
        return $wpdb->$method(...$args);
    }
}
