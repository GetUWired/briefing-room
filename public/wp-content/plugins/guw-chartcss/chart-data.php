<?php

class Chart_Data_Handler {

    protected $wpdb;

    public function __construct() {
        global $wpdb;
        $this->wpdb = $wpdb;
    }

    public function get_grouped_data(array $args) {
        $defaults = [
            'table'      => '',
            'label_col'  => '',
            'value_col'  => '',
            'where'      => [],
            'date_col'   => '',
            'start_date' => '',
            'end_date'   => '',
            'group_by'   => '',
            'limit'      => 50,
        ];

        $args = wp_parse_args($args, $defaults);

        if (empty($args['table']) || empty($args['label_col']) || empty($args['value_col'])) {
            return [];
        }

        $sql = "SELECT {$args['label_col']} AS label, COUNT({$args['value_col']}) AS total
                FROM {$args['table']}";

        $where = [];

        foreach ($args['where'] as $column => $value) {
            $where[] = $this->wpdb->prepare("{$column} = %s", $value);
        }

        if ($args['date_col'] && $args['start_date']) {
            $where[] = $this->wpdb->prepare(
                "{$args['date_col']} >= %s",
                $args['start_date']
            );
        }

        if ($args['date_col'] && $args['end_date']) {
            $where[] = $this->wpdb->prepare(
                "{$args['date_col']} <= %s",
                $args['end_date']
            );
        }

        if (!empty($where)) {
            $sql .= ' WHERE ' . implode(' AND ', $where);
        }

        if ($args['group_by']) {
            $sql .= " GROUP BY {$args['group_by']}";
        }

        $sql .= " ORDER BY total DESC LIMIT " . intval($args['limit']);

        echo '<pre>';
        print_r($sql);
        echo '</pre>';

        return $this->wpdb->get_results($sql, ARRAY_A);
    }
}