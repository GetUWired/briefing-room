<?php

namespace BTN\BriefingRoom;

use BTN\BriefingRoom\DataTransferObjects\UserProfileUpdateData;

class Manager
    extends Framework\Model
    implements Contracts\SyncsWithUserData
{
    use Framework\ORM;
    use Framework\Queryable;
    use Traits\HasUser;
    use Traits\HasUserLoginRecords;

    const ROLE = 'memberium_stationadmin';

    public $id;
    public $firstName;
    public $lastName;
    public $emailAddress; 
    public $organizationId;
    public $userId;

    public static function getTable(): string
    {
        return 'btn_managers';
    }

    public function name()
    {
        return "{$this->firstName} {$this->lastName}";
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
        return TrainingSession::where('userId', $this->userId);
    }

    public function agency(): Agency
    {
        return Agency::find($this->organizationId);
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
}
