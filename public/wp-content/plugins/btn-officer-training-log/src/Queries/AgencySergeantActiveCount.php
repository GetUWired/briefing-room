<?php

namespace BTN\BriefingRoom\Queries;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\UserLogin;

class AgencySergeantActiveCount
{
    protected Agency $agency;

    public function __construct(Agency $agency)
    {
        $this->agency = $agency;
    }

    public function __invoke()
    {
        return Sergeant::query()
            ->join(function($builder) {
                $query = UserLogin::query()
                    ->select('sergeantId', 'MAX(loginAt) as lastLogin')
                    ->groupBy('sergeantId');
                $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) login ON sergeant.id = login.sergeantId");
            })
            ->whereBetween('lastLogin', date('Y-m-d', strtotime('-30 days')), date('Y-m-d'))
            ->count('sergeant.id');
    }
}
