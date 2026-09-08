<?php

namespace BTN\BriefingRoom\Reports;

use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\TrainingRecord;
use BTN\BriefingRoom\TrainingSession;
use BTN\BriefingRoom\UserLogin;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;

class ManagerFacilitatorReport
{
    use Traits\HasDateRange;

    protected Manager $facilitator;

    public function __construct(Manager $facilitator)
    {
        $this->facilitator = $facilitator;
    }

    public function getFileName(): string
    {
        return 'facilitator-report-' . sanitize_title($this->facilitator->name());
    }

    public function getTrainingSessions(): array
    {
        $query = TrainingSession::query()
            ->select(
                ['trainingsession.id', 'sessionId'],
                ['training.post_title', 'trainingTitle'],
                ['trainingsession.duration', 'duration'],
                ['records.recordCount', 'recordCount'],
                ['trainingsession.completedAt', 'completionDate'],
            )
            ->leftJoin('posts', 'training.ID', 'trainingsession.trainingId', 'training')
            ->where('userId', $this->facilitator->userId);

        $query->join(function(JoinQueryBuilder $builder) {
            $query = TrainingRecord::query()
                ->selectRaw('SELECT sessionId, COUNT(id) as recordCount')->groupBy('sessionId');
            $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) records ON trainingsession.id = records.sessionId");
        });

        if($this->hasDateRange()) {
            $this->filterQueryByDateRange($query, 'trainingsession.completedAt');
        }

        return $query->getAll();
    }

    public function getLoginCount(): int
    {
        $query = UserLogin::query()
            ->where('userId', $this->facilitator->userId);

        if($this->hasDateRange()) {
            $this->filterQueryByDateRange($query, 'loginAt');
        }

        return $query->count();
    }

    public function csv(): string
    {

        $trainingSessions = $this->getTrainingSessions();

        $data = [
            ["Date Range of Report: {$this->getDateRangeFormatted()}", '', '', '',''],
            ["Facilitator First Name: {$this->facilitator->firstName}", '', '', '',''],
            ["Facilitator Last Name: {$this->facilitator->lastName}", '', '', '',''],
            ["Total Training Blocks Taught: " . count($trainingSessions), '', '', '',''],
            ["Total Number of Logins: {$this->getLoginCount()}", '', '', '',''],
            ['Session ID', 'Training Title', 'Duration of Training', 'Number of Students', 'Completion Date'],
        ];

        foreach($trainingSessions as $session) {
            $data[] = [
               	$session->completionDate,
                $session->trainingTitle,
                $session->duration,
                $session->recordCount,
                $session->sessionId,
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
        $sessions = $this->getTrainingSessions();

        $title = 'Facilitator Report';

        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        $logo = $image[0];
        $logoAlt = get_bloginfo( 'name' );

        $meta = [
            "Date Range of Report: {$this->getDateRangeFormatted()}",
            "Facilitator First Name: {$this->facilitator->firstName}",
            "Facilitator Last Name: {$this->facilitator->lastName}",
            "Total Training Blocks Taught: " . count($sessions),
            "Total Number of Logins: {$this->getLoginCount()}",
        ];

        $headers = [
            'Completion Date',
            'Training Title',
            'Duration of Training',
            'Number of Students',
			'Session ID',
        ];

        $data = array_map(function ($session) {
            return [
				date('Y-m-d', strtotime($session->completionDate)),
              	$session->trainingTitle,
                TimeFormatter::minutesToHours($session->duration),
                $session->recordCount,
                $session->sessionId,
            ];
        }, $sessions);

        ob_clean();
        include 'templates/report.html.php';
        return ob_get_clean();
    }
}
