<?php

namespace BTN\BriefingRoom\Reports;

use BTN\BriefingRoom\Framework\Model;
use BTN\BriefingRoom\Helpers\Text;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\TrainingRecord;
use BTN\BriefingRoom\TrainingSession;

class StudentReport
{
    use Traits\HasDateRange;

    protected Model $officer;

    public function __construct(Model $officer)
    {
        $this->officer = $officer;
    }

    public function getFileName(): string
    {
        return 'student-report-' . sanitize_title($this->officer->fullName());
    }

    public function getTrainingRecords()
    {
        $query = TrainingRecord::query()
            ->select(
                ['trainingsession.id', 'sessionId'],
                ['training.post_title', 'trainingTitle'],
                ['trainingsession.duration', 'duration'],
                ['trainingsession.completedAt', 'completionDate'],
				['trainingsession.userId', 'userId'],
            )
            ->leftJoin(TrainingSession::getTable(), 'trainingsession.id', 'trainingrecord.sessionId', 'trainingsession')
            ->leftJoin('posts', 'training.ID', 'trainingsession.trainingId', 'training')
            ->where('trainingrecord.userId', $this->officer->userId);

        if ($this->hasDateRange()) {
            $this->filterQueryByDateRange($query, 'trainingsession.completedAt');
        }

        return $query->getAll();
    }

    public function csv(): string
    {
        $records = $this->getTrainingRecords();

        $data = [
            ["Date Range of Report: {$this->getDateRangeFormatted()}", '', '', '', ''],
            ["Rank: {$this->officer->rank}", '', '', '', ''],
            ["Student Name: {$this->officer->firstName} {$this->officer->lastName}", '', '', '', ''],
            ["Agency ID: {$this->officer->agencyId}", '', '', '', ''],
            ["Badge ID: {$this->officer->badgeId}", '', '', '', ''],
            ["State ID: {$this->officer->stateId}", '', '', '', ''],
            ["Total Training Blocks Completed: " . count($records), '', '', '', ''], // Question: Should this be unique trainings? What if they take a training twice?
            ["Total Training Time: " . TimeFormatter::minutesToHours($this->sumRecordDuration($records)), '', '', '', ''],
            ['Session ID', 'Training Title', 'Duration', 'Completion Date']
        ];

        foreach ($records as $record) {
            $data[] = [
                $record->sessionId,
                $record->trainingTitle,
                $record->duration,
                $record->completionDate,
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
        $records = $this->getTrainingRecords();

        $title = 'Student Report';

        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        $logo = $image[0];
        $logoAlt = get_bloginfo('name');

        $meta = [
            "Date Range of Report: {$this->getDateRangeFormatted()}",
            "Rank: {$this->officer->rank}",
            "Student Name: {$this->officer->firstName} {$this->officer->lastName}",
            "Agency ID: {$this->officer->agencyId}",
            "Badge ID: {$this->officer->badgeId}",
            "State ID: {$this->officer->stateId}",
            "Total Training Blocks Completed: " . count($records),
            "Total Training Time: " . TimeFormatter::minutesToHours($this->sumRecordDuration($records)),
        ];

        $headers = [
			'Completion Date',
            'Training Title',
            'Duration',
			'Facilitated By',
			'Session ID',
            
        ];

        $data = array_map(function ($record) {
			 // Get user first and last name
			$user_role = '';
			$user_info = get_userdata($record->userId);
			
			$first_name = $user_info->first_name ?? '';
			$last_name = $user_info->last_name ?? '';
			$full_name = trim($first_name . ' ' . $last_name);
			if (in_array('btn_briefing_room_officer', (array) $user_info->roles)) {
				$full_name = "Student";
			}
            return [
               date('Y-m-d', strtotime($record->completionDate)),
                $record->trainingTitle,
                TimeFormatter::minutesToHours($record->duration),
				$full_name,
				$record->sessionId,
            ];
        }, $records);

        ob_clean();
        include 'templates/report.html.php';
        return ob_get_clean();
    }

    protected function sumRecordDuration(array $records): int
    {
        return array_reduce($records, function ($carry, $record) {
            return $carry + $record->duration;
        }, 0);
    }
}
