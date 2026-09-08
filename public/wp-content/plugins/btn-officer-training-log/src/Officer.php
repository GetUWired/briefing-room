<?php

namespace BTN\BriefingRoom;

use BTN\BriefingRoom\Contracts\SyncsWithUserData;
use BTN\BriefingRoom\DataTransferObjects\UserProfileUpdateData;
use BTN\BriefingRoom\Traits\HasAgency;
use BTN\BriefingRoom\Traits\HasStation;
use BTN\BriefingRoom\Traits\HasUser;

class Officer
    extends Framework\Model
    implements SyncsWithUserData
{
    use Framework\ORM;
    use Framework\Queryable;
    use HasUser;
    use HasStation;
    use HasAgency;

    const ROLE = 'btn_briefing_room_officer';

    public $id;
    public $firstName;
    public $lastName;
    public $emailAddress;
    public $badgeId;
    public $stateId;
    public $agencyId;
    public $stationId;
    public $rank;
    public $userId;

    public static function getTable(): string
    {
        return 'btn_officers';
    }

    public function fullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public static function formFields()
    {
        return [
            ['id' => 'rank', 'label' => 'Rank', 'required' => true, 'options' => [
                ['id' => 'officer', 'name' => 'Officer'],
                ['id' => 'sergeant', 'name' => 'Sergeant'],
                ['id' => 'lieutenant', 'name' => 'Lieutenant'],
                ['id' => 'captain', 'name' => 'Captain'],
                ['id' => 'chief', 'name' => 'Chief']
            ]],
            ['id' => 'firstName', 'label' => 'First Name', 'required' => true],
            ['id' => 'lastName', 'label' => 'Last Name', 'required' => true],
            ['id' => 'emailAddress', 'label' => 'Email Address', 'required' => true],
            ['id' => 'stateId', 'label' => 'State ID', 'required' => false],
            ['id' => 'agencyId', 'label' => 'Agency ID', 'required' => false],
            ['id' => 'badgeId', 'label' => 'Badge ID', 'required' => false]
        ];
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
