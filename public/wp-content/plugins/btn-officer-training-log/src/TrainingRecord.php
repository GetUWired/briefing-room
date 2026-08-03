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
}
