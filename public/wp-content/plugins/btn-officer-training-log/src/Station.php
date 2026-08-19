<?php

namespace BTN\BriefingRoom;

class Station extends Framework\Model
{
    use Framework\ORM;
    use Framework\Queryable;

    public $id;
    public $name;
    public $agencyId;

    public static function getTable(): string
    {
        return 'btn_stations';
    }

    public function agency()
    {
        return Agency::find($this->agencyId);
    }

    public function agencyName(): string
    {
        try {
            return $this->agency()->name ?? '';
        } catch (\Exception $e) {
            return '';
        }
    }

    public function officers()
    {
        return Officer::query()->where('stationId', $this->id);
    }

    public function sergeants()
    {
        return Sergeant::query()->where('stationId', $this->id);
    }
}
