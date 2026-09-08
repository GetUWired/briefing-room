<?php

namespace BTN\BriefingRoom\Tests\API;

use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Factories\StationFactory;
use WP_REST_Request;
use WP_UnitTestCase;

class GetStationsTest extends WP_UnitTestCase
{
    public function test_search_by_name()
    {
        StationFactory::create(['name' => 'Sesame Street']);
        StationFactory::create(['name' => 'Abbey Road']);

        $request = new WP_REST_Request();
        $request->set_param('search', 'ses');

        $controller = new \BTN\BriefingRoom\API\GetStations();
        $response = $controller->handle($request);

        $this->assertEquals( 1, count($response) );
    }

    public function test_filter_by_agency()
    {
        $agency = AgencyFactory::create();
        $otherAgency = AgencyFactory::create();

        StationFactory::create(['name' => 'Sesame Street', 'agencyId' => $agency->id]);
        StationFactory::create(['name' => 'Abbey Road', 'agencyId' => $otherAgency->id]);

        $request = new WP_REST_Request();
        $request->set_param('agency', $agency->id);

        $controller = new \BTN\BriefingRoom\API\GetStations();
        $response = $controller->handle($request);

        $this->assertEquals( 1, count($response) );
    }
}
