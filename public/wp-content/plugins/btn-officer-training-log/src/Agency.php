<?php

namespace BTN\BriefingRoom;

use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\QueryBuilder;

class Agency extends Framework\Model
{
    use Framework\ORM;
    use Framework\Queryable;

    public $id;
    public $referenceId;
    public $name;
    public $state;

    public static function getTable(): string
    {
        return 'btn_agencies';
    }

    public function stations()
    {
        return Station::query()->where('agencyId', $this->id);
    }

    public function managers()
    {
        return Manager::query()->where('organizationId', $this->id);
    }

    public function managerEmail()
    {
        return $this->managers()->get()->emailAddress ?? '';
    }

    public function sergeants()
    {
        return Sergeant::query()
            ->select('sergeant.*', 'station.name as station')
            ->leftJoin('btn_stations', 'sergeant.stationId', 'station.id', 'station')
            ->where('station.agencyId', $this->id);
    }

    public function sergeantCount()
    {
        return Sergeant::query()
            ->leftJoin('btn_stations', 'sergeant.stationId', 'station.id', 'station')
            ->where('station.agencyId', $this->id)
            ->count();
    }

    public function officers()
    {
        return Officer::query()
            ->select('officer.*', 'station.name as station')
            ->leftJoin('btn_stations', 'officer.stationId', 'station.id', 'station')
            ->where('station.agencyId', $this->id);
    }

    public function officerCount()
    {
        return Officer::query()
            ->leftJoin('btn_stations', 'officer.stationId', 'station.id', 'station')
            ->where('station.agencyId', $this->id)
            ->count();
    }

    public static function withSergeantCount(QueryBuilder $query): QueryBuilder
    {
        return $query->join(function(JoinQueryBuilder $builder) {
            $query = Sergeant::query()
                ->selectRaw('SELECT station.agencyId, COUNT(*) as sergeantCount')
                ->join(function(JoinQueryBuilder $builder) {
                    $builder->leftJoin(Station::getTable(), 'station')
                        ->on('sergeant.stationId', 'station.id');
                })
                ->groupBy('agencyId');
            $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) sergeant ON agency.id = sergeant.agencyId");
        });
    }
}
