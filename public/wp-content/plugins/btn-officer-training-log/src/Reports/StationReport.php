<?php

namespace BTN\BriefingRoom\Reports;

use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\TrainingSession;

class StationReport
{
    use Traits\HasDateRange;

    public Station $station;

    public function __construct(Station $station)
    {
        $this->station = $station;
    }

    public function getFileName(): string
    {
        return 'station-report-' . sanitize_title($this->station->name);
    }

    public function getSessionsCount($station_id)
    {
        $query = TrainingSession::query()
            ->where('trainingsession.stationId', $station_id);

        if($this->hasDateRange()) {
            $this->filterQueryByDateRange($query, 'trainingsession.completedAt');
        }

        return $query->count('trainingsession.id');
    }

    public function getSessionsDuration($station_id)
    {
        $query = TrainingSession::query()
            ->select('trainingsession.stationId')
            ->selectRaw('SUM(duration) as totalDuration')
            ->where('trainingsession.stationId', $station_id);

        if($this->hasDateRange()) {
            $this->filterQueryByDateRange($query, 'trainingsession.completedAt');
        }

        return $query->get()->totalDuration;
    }

    public function csv(): string
    {
        $station_ids = (isset($_GET['station_id']) && !empty($_GET['station_id']))
    	? explode(',', $_GET['station_id'])
   		 : [$this->station->id]; // fallback to single station
		$data = [];

		$data = [
			["Agency Name: {$this->station->agency()->name}", '', '', '', ''],
			["Date Range: {$this->getDateRangeFormatted()}", '', '', '', ''],
			['Station Name', '# of Facilitators', '# of Students', 'Total # of Training Blocks Taught', 'Duration of Training Taught'],
		];

		foreach ($station_ids as $station_id) {
			$station = Station::find($station_id);
			if (!$station) continue;

			$data[] = [
				$station->name,
				$station->sergeants()->count(),
				$station->officers()->count(),
				$this->getSessionsCount($station_id),
				TimeFormatter::minutesToHours($this->getSessionsDuration($station_id))
			];
		}
		
		$rows = array_map(function ($row) {
            return implode(',', $row);
        }, $data);

        $csv = implode(PHP_EOL, $rows);

        return $csv;
		
	}

    public function html(): string
    {
        $title = 'Station Report';

        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        $logo = $image[0];
        $logoAlt = get_bloginfo( 'name' );

        $meta = [
            "Agency Name: {$this->station->agency()->name}",
            "Date Range: {$this->getDateRangeFormatted()}",
        ];

        $headers = [
            'Station Name',
            '# of Facilitators',
            '# of Students',
            'Total # of Training Blocks Taught',
            'Duration of Training Taught',
        ];
		
		$station_ids = (isset($_GET['station_id']) && !empty($_GET['station_id']))
			? explode(',', $_GET['station_id'])
			: [$this->station->id]; // ensure it's always an array

		$data = [];

		foreach ($station_ids as $station_id) {
			$station = Station::find($station_id);

			if (!$station) {
				continue; // skip invalid stations
			}

			$data[] = [
				$station->name,
				$station->sergeants()->count(),
				$station->officers()->count(),
				$this->getSessionsCount($station_id),
				TimeFormatter::minutesToHours($this->getSessionsDuration($station_id))
			];
		}

        ob_clean();
        include 'templates/report.html.php';
        return ob_get_clean();
    }
}
