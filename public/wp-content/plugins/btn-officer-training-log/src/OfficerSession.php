<?php


namespace BTN\BriefingRoom;

class OfficerSession extends Framework\Model
{
    use Framework\ORM;

    public $id;
    public $trainingId;
    public $officerId;
    public $duration;
    public $completedAt;

    public static function getTable(): string
    {
        return 'btn_officer_sessions';
    }

    public function training(): Training
    {
        return $this->_training ?? $this->_training = new Training($this->trainingId);
    }

    public function duration()
    {
        return $this->duration;
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
