<?php

namespace BTN\BriefingRoom;

use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\QueryBuilder;

class TrainingRecord extends Framework\Model
{
    use Framework\ORM;
    use Framework\Queryable;

    public $id;
    public $userId;
    public $sessionId;

    /* DEPRECATED */ public $officerId;

    public static function getTable(): string
    {
        return 'btn_training_records';
    }

    public function session()
    {
        return TrainingSession::find($this->sessionId);
    }

    public function officer()
    {
        return Officer::find($this->officerId);
    }

    public static function joinTrainingSessions() {
        return function(JoinQueryBuilder $builder) {
            $builder
                ->leftJoin(TrainingSession::getTable(), 'trainingsession')
                ->on('trainingsession.id', 'trainingrecord.sessionId');
        };
    }

    /**
     * The session (if any) $userId already has a record in for $trainingId on the given calendar day.
     * Returns an object with ->sessionId, or null if none exists.
     */
    public static function findSessionForTrainingOnDate($trainingId, $userId, $date) {
        $matches = self::query()
            ->select(['trainingsession.id', 'sessionId'])
            ->leftJoin(TrainingSession::getTable(), 'trainingsession.id', 'trainingrecord.sessionId', 'trainingsession')
            ->where('trainingsession.trainingId', $trainingId)
            ->where('trainingrecord.userId', $userId)
            ->whereBetween('trainingsession.completedAt', $date . ' 00:00:00', $date . ' 23:59:59')
            ->getAll();

        return !empty($matches) ? $matches[0] : null;
    }

    /**
     * How many records (attendees) a session has. A session with exactly one
     * attendee is "personal" and safe to update in place; a session with more
     * than one is a shared/group session and must not be mutated on behalf of
     * just one attendee.
     */
    public static function countForSession($sessionId) {
        return self::query()->where('sessionId', $sessionId)->count();
    }
}
