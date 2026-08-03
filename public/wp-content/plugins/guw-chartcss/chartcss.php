<?php
/*
CssChart class to build CSS charts from aggregated data.
*/

class CssChart {

    public $type;
    public $height;
    public $labels;
    public $headings;
    public $data_display;
    public $axes;
    public $spacing;
    public $multiple;

    public function __construct(
        $type = 'column',
        $height = '300px',
        $labels = true,
        $headings = true,
        $data_display = '',
        // $axes = 'show-primary-axis show-data-axes',
        $axes = '',
        $spacing = '1',
        $multiple = false
    ) {
        $this->type = $type;
        $this->height = $height;
        $this->labels = $labels;
        $this->headings = $headings;
        $this->data_display = $data_display;
        $this->axes = $axes;
        $this->spacing = $spacing;
        $this->multiple = $multiple;
    }

    public function buildChartWidget($table_data, $heading = '', $primay_label = '', $data_label = '') {
        $this->buildChartTable($table_data, $heading, $primay_label, $data_label);
    }

    public function buildChartTable($table_data, $heading = '', $primay_label = '', $data_label = '') {

        if (empty($table_data)) {
            echo '<div class="chart-wrap"><div class="chart-loading">No data available.</div></div>';
            return;
        }

        $classes = $this->type;
        $classes .= $this->headings ? ' show-heading' : '';
        $classes .= $this->labels ? ' show-labels' : '';
        $classes .= ' ' . $this->axes;
        $classes .= !empty($this->data_display) ? ' ' . $this->data_display : '';
        $classes .= ' data-spacing-' . $this->spacing;

        $max = max($table_data);
        $start = 0;
?>
        <div class="chart-wrap <?= $this->type ?>">
            <table style="min-height:<?= $this->height ?>;" class="charts-css <?= $classes ?>">
                <caption><?= $heading ?></caption>
                <thead>
                    <tr><th><?= $primay_label ?></th><th><?= $data_label ?></th></tr>
                </thead>
                <tbody>
                    <?php foreach ($table_data as $key => $value):
                        $size = $value / $max;
                    ?>
                        <tr>
                            <th><?= $key ?></th>
                            <td style="--start:<?= $start ?>; --size:<?= $size ?>;">
                                <span class="data"><?= $value ?></span>
                            </td>
                        </tr>
                    <?php
                        $start = $size;
                    endforeach; ?>
                </tbody>
            </table>
            <div class="data-axis"><?= $data_label ?></div>
        </div>
    <?php
    }
}

class Chart_Shortcode_Controller {

    public function __construct() {
        add_shortcode('css_chart', [$this, 'render_chart']);
    }

    public function render_chart($atts) {
        $atts = shortcode_atts([
            'table'      => '',
            'label_col'  => '',
            'value_col'  => 'id',
            'group_by'   => '',
            'date_col'   => '',
            'start_date' => '',
            'end_date'   => '',
            'agency_id'  => btn_briefing()->hidebriefing()->get_agency_id_by_user_id(),
            'type'       => 'column',
            'height'     => '300px',
            'show'       => 'chart',
        ], $atts);

        $repo = new Chart_Data_Handler();

        $where = [];
        if (!empty($atts['agency_id'])) {
            $where['agency_id'] = $atts['agency_id'];
        }

        $rows = $repo->get_grouped_data([
            'table'      => $atts['table'],
            'label_col'  => $atts['label_col'],
            'value_col'  => $atts['value_col'],
            'group_by'   => $atts['group_by'],
            'date_col'   => $atts['date_col'],
            'start_date' => $atts['start_date'],
            'end_date'   => $atts['end_date'],
            'where'      => $where,
        ]);

        if (empty($rows)) {
            return '<div class="chart-wrap"><div class="chart-loading">No data available.</div></div>';
        }

        $table_data = [];
        foreach ($rows as $row) {
            $table_data[$row['label']] = (int)$row['total'];
        }

        ob_start();

        $chart = new CssChart($atts['type'], $atts['height']);
        $chart->buildChartWidget($table_data, 'Results', $atts['label_col'], 'Count');

        return ob_get_clean();
    }
}

add_action('init', function () {
    new Chart_Shortcode_Controller();
});
