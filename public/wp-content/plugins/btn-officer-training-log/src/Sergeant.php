<?php

namespace BTN\BriefingRoom;

use BTN\BriefingRoom\Contracts\SyncsWithUserData;
use BTN\BriefingRoom\DataTransferObjects\UserProfileUpdateData;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Traits\HasUser;
use BTN\BriefingRoom\Traits\HasUserLoginRecords;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\QueryBuilder;

class Sergeant
    extends Framework\Model
    implements SyncsWithUserData
{
    use Framework\ORM;
    use Framework\Queryable;
    use HasUser;
    use HasUserLoginRecords;

    const ROLE = 'btn_briefing_room_sergeant';

    public $id;
    public $firstName;
    public $lastName;
    public $emailAddress;
    public $organizationId;
    public $stationId;
    public $userId;
    public $rank;
    public $badgeId;
    public $stateId;
    public $agencyId;

    public static function getTable(): string
    {
        return 'btn_sergeants';
    }

    public function name()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function station()
    {
        return Station::find($this->stationId);
    }

    public function stationName(): string
    {
        try {
            return $this->station()->name;
        } catch (\Exception $e) {
            return '';
        }
    }

    public function agency(): Agency
    {
        return $this->organizationId
            ? Agency::find($this->organizationId)
            : $this->station()->agency();
    }

    public function agencyName(): string
    {
        try {
            return $this->agency()->name;
        } catch (\Exception $e) {
            return '';
        }
    }

    public function sessions()
    {
        //return TrainingSession::where('sergeantId', $this->id);
        // New: sergeandId is deprecated, the session record is connected via userId 
        return TrainingSession::where('userId', $this->userId);
    }

    public function trainingTime()
    {
        return TimeFormatter::minutesToHours($this->sessions()->sum('duration'));
    }

    public static function syncUserData(UserProfileUpdateData $data)
    {
        self::query()
            ->where('userId', $data->id)
            ->update([
                'firstName' => $data->firstName,
                'lastName' => $data->lastName,
                'emailAddress' => $data->emailAddress,
            ]);
    }

    /**
     * @param callable(QueryBuilder): QueryBuilder $sessionCallback
     */
    public static function withTrainingTime(QueryBuilder $query, callable $sessionCallback = null): QueryBuilder
    {
        return $query
            ->join(function (JoinQueryBuilder $builder) use ($sessionCallback) {

                $query = TrainingSession::query()
                    ->selectRaw('SELECT userId, COUNT(*) as sessionCount, SUM(duration) as trainingTime')
                    ->groupBy('userId');

                if($sessionCallback) $sessionCallback($query);

                $builder->joinRaw("
                    LEFT JOIN ({$query->getSQL()}) trainingSession
                      ON sergeant.userId = trainingSession.userId
                ");
            });
    }

    public static function withLastLogin(QueryBuilder $query): QueryBuilder
    {
        return $query
            ->join(function (JoinQueryBuilder $builder) {

                $query = UserLogin::query()
                    ->selectRaw('SELECT userId, MAX(loginAt) as lastLogin')
                    ->groupBy('userId');

                $builder->joinRaw("
                    LEFT JOIN ({$query->getSQL()}) login
                      ON sergeant.userId = login.userId
                ");
            });
    }
}
