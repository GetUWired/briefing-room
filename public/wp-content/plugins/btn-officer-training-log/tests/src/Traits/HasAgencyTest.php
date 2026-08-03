<?php

namespace BTN\BriefingRoom\Tests\Traits;

use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\StationFactory;
use WP_UnitTestCase;

class HasAgencyTest extends WP_UnitTestCase
{
    public function test_officer_has_agency()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create([
            'agencyId' => $agency->id,
        ]);
        $officer = OfficerFactory::create([
            'agencyId' => $agency->id,
            'stationId' => $station->id,
        ]);

        $this->assertEquals($agency->id, $officer->agency()->id);
    }

    public function test_officer_has_agency_through_station()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create([
            'agencyId' => $agency->id,
        ]);
        $officer = OfficerFactory::create([
            'stationId' => $station->id,
        ]);

        $this->assertEquals($agency->id, $officer->agency()->id);
    }
}
