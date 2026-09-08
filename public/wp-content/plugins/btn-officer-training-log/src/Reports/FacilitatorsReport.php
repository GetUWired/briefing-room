<?php

namespace BTN\BriefingRoom\Reports;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Reports\Contract\Report;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\TrainingRecord;
use BTN\BriefingRoom\TrainingSession;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;

/**
 * Combined "Download Selected Facilitators" report.
 *
 * Mirrors SessionReport: constructed with no arguments, reads the selection from
 * $_GET['facilitator_ids'] ("all" or a comma separated list of WordPress user IDs)
 * and produces a single CSV / printable HTML document with one row per training
 * session led, across every selected person.
 *
 * Checkboxes carry userId (not the role-table id) because the facilitator tab
 * lists both Managers and Sergeants, whose ids can collide.
 */
class FacilitatorsReport implements Report
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
            $agencyName . 'facilitators-report'
            . ($this->hasDateRange() ? '-' . $this->getStartDateFormatted() : '')
        );
    }

    public function csv(): string
    {
        $agencyId = Memberium::getContactField('_AgencyID');
        $agency = $agencyId ? Agency::find($agencyId) : null;

        $data = [
            ['Report Title: ' . (isset($agency->name) ? $agency->name . ' ' : '') . 'Facilitators Training Report', '', '', '', '', ''],
            ['Report Created By: System Generated', '', '', '', '', ''],
            ["Date Range of Report: {$this->getDateRangeFormatted()}", '', '', '', '', ''],
            ['Source: TheBriefingRoom.com', '', '', '', '', ''],
            ['', '', '', '', '', ''],
            ['Facilitator Name', 'Session ID', 'Training Title', 'Duration', 'Number of Students', 'Completion Date'],
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
        $title = 'Facilitators Report';

        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        $logo = $image[0] ?? '';
        $logoAlt = get_bloginfo('name');

        $meta = [
            "Date Range of Report: {$this->getDateRangeFormatted()}",
            'Facilitators Included: ' . count($this->resolveUserIds()),
        ];

        $headers = [
            'Facilitator Name',
            'Session ID',
            'Training Title',
            'Duration',
            'Number of Students',
            'Completion Date',
        ];

        $data = $this->getData();

        ob_clean();
        include 'templates/report.html.php';
        return ob_get_clean();
    }

    /**
     * Flattened rows (one per session led) for every selected user.
     *
     * @return array<int, array<int, string>>
     */
    public function getData(): array
    {
        $rows = [];

        foreach ($this->resolveUserIds() as $userId) {
            $name = $this->userName($userId);

            foreach ($this->sessionsForUser($userId) as $session) {
                $rows[] = [
                    $name,
                    $session->sessionId,
                    $session->trainingTitle,
                    TimeFormatter::minutesToHours($session->duration),
                    $session->recordCount ?? 0,
                    date('Y-m-d', strtotime($session->completionDate)),
                ];
            }
        }

        return $rows;
    }

    /**
     * Sessions led by the given user. Same shape as
     * FacilitatorReport::getTrainingSessions() but keyed by userId so it works for
     * any role that appears on the facilitator tab (Manager or Sergeant).
     */
    protected function sessionsForUser($userId): array
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
            ->where('userId', $userId);

        $query->join(function (JoinQueryBuilder $builder) {
            $sub = TrainingRecord::query()
                ->selectRaw('SELECT sessionId, COUNT(id) as recordCount')
                ->groupBy('sessionId');
            $builder->joinRaw("LEFT JOIN ({$sub->getSQL()}) records ON trainingsession.id = records.sessionId");
        });

        if ($this->hasDateRange()) {
            $this->filterQueryByDateRange($query, 'trainingsession.completedAt');
        }

        return $query->getAll();
    }

    /**
     * Selected user IDs. "all" resolves to every Manager + Sergeant in the agency
     * (date range still narrows the rows, not the roster), matching SessionReport.
     *
     * @return int[]
     */
    public function resolveUserIds(): array
    {
        if ($this->userIds !== null) {
            return $this->userIds;
        }

        $raw = $_GET['facilitator_ids'] ?? '';

        if ($raw !== 'all') {
            return $this->userIds = array_values(array_unique(array_filter(array_map('absint', explode(',', (string) $raw)))));
        }

        $agencyId = Memberium::getContactField('_AgencyID');
        if (!$agencyId) {
            return $this->userIds = [];
        }

        $ids = [];

        $managers = Manager::query()
            ->select('manager.userId')
            ->where('organizationId', $agencyId)
            ->getAll();

        $sergeants = Sergeant::query()
            ->select('sergeant.userId')
            ->leftJoin(Station::getTable(), 'sergeant.stationId', 'station.id', 'station')
            ->where('station.agencyId', $agencyId)
            ->getAll();

        foreach ([...$managers, ...$sergeants] as $row) {
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
