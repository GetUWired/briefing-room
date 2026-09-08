<?php

namespace BTN\BriefingRoom\Tests\API;

use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\SergeantFactory;
use BTN\BriefingRoom\Factories\StationFactory;
use WP_REST_Request;
use WP_UnitTestCase;

class SearchStudentsTest extends WP_UnitTestCase
{
    public function test_search_officers_and_sergeants_by_name()
    {
        $station = StationFactory::create();
        OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'lastName' => 'Aye', 'badgeId' => '0001']);
        OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'Jane', 'lastName' => 'Aye', 'badgeId' => '0002']);
        SergeantFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'lastName' => 'Bee', 'badgeId' => '0003']);
        SergeantFactory::create(['stationId' => $station->id, 'firstName' => 'Jane', 'lastName' => 'Bee', 'badgeId' => '0004']);

        $request = new WP_REST_Request();
        $request->set_param('search', 'john'); // Search for sergeants, officers with first name containing 'joh'
        $request->set_param('agency', $station->agencyId);

        $controller = new \BTN\BriefingRoom\API\SearchStudents();
        $response = $controller->handle($request);

        $this->assertEquals( 2, count($response) );
    }

    public function test_search_officers_and_sergeants_by_badge_id()
    {
        $station = StationFactory::create();
        OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'lastName' => 'Aye', 'badgeId' => 'a-123']);
        OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'Jane', 'lastName' => 'Aye', 'badgeId' => 'a-456']);
        SergeantFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'lastName' => 'Bee', 'badgeId' => 'b-123']);
        SergeantFactory::create(['stationId' => $station->id, 'firstName' => 'Jane', 'lastName' => 'Bee', 'badgeId' => 'b-456']);

        $request = new WP_REST_Request();
        $request->set_param('search', '123'); // Search for sergeants, officers with badge ID containing '12345'
        $request->set_param('agency', $station->agencyId);

        $controller = new \BTN\BriefingRoom\API\SearchStudents();
        $response = $controller->handle($request);

        $this->assertEquals( 2, count($response) );
    }

    public function test_search_officers_and_sergeants_sorted_by_name()
    {
        $station = StationFactory::create();
        OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'lastName' => 'Sea', 'badgeId' => '0001']);
        OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'Jane', 'lastName' => 'Bee', 'badgeId' => '0002']);
        SergeantFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'lastName' => 'Aye', 'badgeId' => '0003']);
        SergeantFactory::create(['stationId' => $station->id, 'firstName' => 'Jane', 'lastName' => 'Sea', 'badgeId' => '0004']);

        $request = new WP_REST_Request();
        $request->set_param('search', 'j'); // Search for sergeants, officers with first name containing 'joh'
        $request->set_param('agency', $station->agencyId);

        $controller = new \BTN\BriefingRoom\API\SearchStudents();
        $response = $controller->handle($request);

        /**
         * Results should first be sorted by the last name, then sorted by the first name (if the last names are the same).
         */
        $this->assertEquals( 'Aye, John', $this->formatNameSortable($response[0]) );
        $this->assertEquals( 'Bee, Jane', $this->formatNameSortable($response[1]) );
        $this->assertEquals( 'Sea, Jane', $this->formatNameSortable($response[2]) );
        $this->assertEquals( 'Sea, John', $this->formatNameSortable($response[3]) );
    }

    public function test_search_excludes_other_agencies()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create(['agencyId' => $agency->id]);
        OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'lastName' => 'Aye']);
        SergeantFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'lastName' => 'Bee']);

        $otherAgency = AgencyFactory::create();
        $otherStation = StationFactory::create(['agencyId' => $otherAgency->id]);
        OfficerFactory::create(['stationId' => $otherStation->id, 'firstName' => 'John', 'lastName' => 'Sea']);
        SergeantFactory::create(['stationId' => $otherStation->id, 'firstName' => 'John', 'lastName' => 'Dee']);

        $request = new WP_REST_Request();
        $request->set_param('search', 'john'); // Search for officers with first name containing 'joh'
        $request->set_param('agency', $station->agencyId);

        $controller = new \BTN\BriefingRoom\API\SearchStudents();
        $response = $controller->handle($request);

        $this->assertEquals( 2, count($response) );
    }

    protected function formatNameSortable($object): string
    {
        return "$object->lastName, $object->firstName";
    }
}
