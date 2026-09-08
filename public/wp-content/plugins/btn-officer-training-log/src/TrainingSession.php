<?php


namespace BTN\BriefingRoom;

class TrainingSession extends Framework\Model
{
    use Framework\ORM;
    use Framework\Queryable;

    public $id;
    public $trainingId;
    public $userId;
    public $duration;
    public $completedAt;

    /* DEPRECATED */ public $managerId;
    /* DEPRECATED */ public $sergeantId;
    /* DEPRECATED */ public $officerId;

    public static function getTable(): string
    {
        return 'btn_training_sessions';
    }

    public function training(): Training
    {
        return $this->_training ?? $this->_training = new Training($this->trainingId);
    }

    public function sergeant()
    {
        return $this->_sergeant ?? $this->_sergeant = new Sergeant($this->sergeantId);
    }

    public function duration()
    {
        return $this->duration;
    }

    public function records()
    {
        return TrainingRecord::query()->where('sessionId', $this->id);
    }

    public function getCompletedAt($dateFormat = 'm/d/Y')
    {
        return date_format(new \DateTime($this->completedAt), $dateFormat);
    }

    public static function thisMonth()
    {
        return self::whereMonth('completedAt', date('n'));
    }
}
