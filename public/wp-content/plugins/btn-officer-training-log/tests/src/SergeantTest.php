<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Factories\SergeantFactory;
use BTN\BriefingRoom\Factories\StationFactory;
use WP_UnitTestCase;

class SergeantTest extends WP_UnitTestCase
{
    public function test_sergeant_has_agency()
    {
        $agency = AgencyFactory::create();
        $sergeant = SergeantFactory::create([
            'organizationId' => $agency->id,
        ]);

        $this->assertEquals($agency->id, $sergeant->agency()->id);
    }

    public function test_sergeant_has_agency_through_station()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create([
            'agencyId' => $agency->id,
        ]);
        $sergeant = SergeantFactory::create([
            'stationId' => $station->id,
        ]);

        $this->assertEquals($agency->id, $sergeant->agency()->id);
    }
}
