<?php

namespace BTN\BriefingRoom\Reports;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Reports\Contract\Report;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\TrainingRecord;
use BTN\BriefingRoom\TrainingSession;

/**
 * Combined "Download Selected Students" report.
 *
 * Mirrors SessionReport: constructed with no arguments, reads the selection from
 * $_GET['student_ids'] (either the literal string "all" or a comma separated list
 * of WordPress user IDs), and produces a single CSV / printable HTML document with
 * one row per training record across every selected person.
 *
 * Checkboxes carry userId (not the role-table id) because the student tab lists
 * both Officers and Sergeants, whose ids can collide.
 */
class StudentsReport implements Report
{
    use Traits\HasDateRange;

    /** @var int[]|null */
    protected $userIds = null;

    public function getFileName(): string
    {
        $agencyId = Memberium::getContactField('_AgencyID');
        $agency = $agencyId ? Agency::find($agencyId) : null;
        $agencyName = isset($agency->name) ? $agency->name . '-' : '';

        return sanitize_file_name(
            $agencyName . 'students-report'
            . ($this->hasDateRange() ? '-' . $this->getStartDateFormatted() : '')
        );
    }

    public function csv(): string
    {
        $agencyId = Memberium::getContactField('_AgencyID');
        $agency = $agencyId ? Agency::find($agencyId) : null;

        $data = [
            ['Report Title: ' . (isset($agency->name) ? $agency->name . ' ' : '') . 'Students Training Report', '', '', '', ''],
            ['Report Created By: System Generated', '', '', '', ''],
            ["Date Range of Report: {$this->getDateRangeFormatted()}", '', '', '', ''],
            ['Source: TheBriefingRoom.com', '', '', '', ''],
            ['', '', '', '', ''],
            ['Student Name', 'Session ID', 'Training Title', 'Duration', 'Completion Date'],
        ];

        foreach ($this->getData() as $row) {
            $data[] = $row;
        }

        $fp = fopen('php://temp', 'r+');
        foreach ($data as $row) {
            fputcsv($fp, $row);
        }
        rewind($fp);
        $csv = stream_get_contents($fp);
        fclose($fp);

        return $csv ?: '';
    }

    public function html(): string
    {
        $title = 'Students Report';

        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        $logo = $image[0] ?? '';
        $logoAlt = get_bloginfo('name');

        $meta = [
            "Date Range of Report: {$this->getDateRangeFormatted()}",
            'Students Included: ' . count($this->resolveUserIds()),
        ];

        $headers = [
            'Student Name',
            'Session ID',
            'Training Title',
            'Duration',
            'Completion Date',
        ];

        $data = $this->getData();

        ob_clean();
        include 'templates/report.html.php';
        return ob_get_clean();
    }

    /**
     * Flattened rows (one per training record) for every selected user.
     *
     * @return array<int, array<int, string>>
     */
    public function getData(): array
    {
        $rows = [];

        foreach ($this->resolveUserIds() as $userId) {
            $name = $this->userName($userId);

            foreach ($this->trainingRecordsForUser($userId) as $record) {
                $rows[] = [
                    $name,
                    $record->sessionId,
                    $record->trainingTitle,
                    TimeFormatter::minutesToHours($record->duration),
                    date('Y-m-d', strtotime($record->completionDate)),
                ];
            }
        }

        return $rows;
    }

    /**
     * Training records where the given user was a participant. Same shape as
     * StudentReport::getTrainingRecords() but keyed by userId so it works for any
     * role that appears on the student tab (Officer or Sergeant).
     */
    protected function trainingRecordsForUser($userId): array
    {
        $query = TrainingRecord::query()
            ->select(
                ['trainingsession.id', 'sessionId'],
                ['training.post_title', 'trainingTitle'],
                ['trainingsession.duration', 'duration'],
                ['trainingsession.completedAt', 'completionDate'],
            )
            ->leftJoin(TrainingSession::getTable(), 'trainingsession.id', 'trainingrecord.sessionId', 'trainingsession')
            ->leftJoin('posts', 'training.ID', 'trainingsession.trainingId', 'training')
            ->where('trainingrecord.userId', $userId);

        if ($this->hasDateRange()) {
            $this->filterQueryByDateRange($query, 'trainingsession.completedAt');
        }

        return $query->getAll();
    }

    /**
     * Selected user IDs. "all" resolves to every Officer + Sergeant in the agency
     * (date range still narrows the rows, not the roster), matching SessionReport.
     *
     * @return int[]
     */
    public function resolveUserIds(): array
    {
        if ($this->userIds !== null) {
            return $this->userIds;
        }

        $raw = $_GET['student_ids'] ?? '';

        if ($raw !== 'all') {
            return $this->userIds = array_values(array_unique(array_filter(array_map('absint', explode(',', (string) $raw)))));
        }

        $agencyId = Memberium::getContactField('_AgencyID');
        if (!$agencyId) {
            return $this->userIds = [];
        }

        $ids = [];

        $officers = Officer::query()
            ->select('officer.userId')
            ->leftJoin(Station::getTable(), 'officer.stationId', 'station.id', 'station')
            ->where('station.agencyId', $agencyId)
            ->getAll();

        $sergeants = Sergeant::query()
            ->select('sergeant.userId')
            ->leftJoin(Station::getTable(), 'sergeant.stationId', 'station.id', 'station')
            ->where('station.agencyId', $agencyId)
            ->getAll();

        foreach ([...$officers, ...$sergeants] as $row) {
            if (!empty($row->userId)) {
                $ids[(int) $row->userId] = (int) $row->userId;
            }
        }

        return $this->userIds = array_values($ids);
    }

    protected function userName($userId): string
    {
        $user = get_userdata($userId);
        if (!$user) {
            return "User #{$userId}";
        }

        $name = trim($user->first_name . ' ' . $user->last_name);
        return $name !== '' ? $name : $user->display_name;
    }
}
