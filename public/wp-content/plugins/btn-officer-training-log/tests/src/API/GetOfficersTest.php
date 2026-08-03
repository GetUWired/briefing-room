<?php

namespace BTN\BriefingRoom\Tests\API;

use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\StationFactory;
use WP_REST_Request;
use WP_UnitTestCase;

class GetOfficersTest extends WP_UnitTestCase
{
    public function test_search_by_name()
    {
        OfficerFactory::create(['firstName' => 'John']);
        OfficerFactory::create(['firstName' => 'Jane']);

        $request = new WP_REST_Request();
        $request->set_param('search', 'joh'); // Search for officers with first name containing 'joh'

        $controller = new \BTN\BriefingRoom\API\GetOfficers();
        $response = $controller->handle($request);

        $this->assertEquals( 1, count($response) );
    }

    public function test_search_by_badge_id()
    {
        OfficerFactory::create(['firstName' => 'John', 'badgeId' => '1234']);
        OfficerFactory::create(['firstName' => 'John', 'badgeId' => '5678']);

        $request = new WP_REST_Request();
        $request->set_param('search', '56');

        $controller = new \BTN\BriefingRoom\API\GetOfficers();
        $response = $controller->handle($request);

        $this->assertEquals( 1, count($response) );
        $this->assertEquals('5678', $response[0]->badgeId);
    }

    public function test_filter_by_agency()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create(['agencyId' => $agency->id]);
        $officer = OfficerFactory::create(['stationId' => $station->id]);

        $otherAgency = AgencyFactory::create();
        $otherStation = StationFactory::create(['agencyId' => $otherAgency->id]);
        $otherOfficer = OfficerFactory::create(['stationId' => $otherStation->id]);

        $request = new WP_REST_Request();
        $request->set_param('agency', $agency->id);

        $controller = new \BTN\BriefingRoom\API\GetOfficers();
        $response = $controller->handle($request);

        $this->assertEquals( 1, count($response) );
    }

    public function test_filter_by_agency_and_name()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create(['agencyId' => $agency->id]);
        $officer = OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'agencyId' => 'ag-123']);

        $otherAgency = AgencyFactory::create();
        $otherStation = StationFactory::create(['agencyId' => $otherAgency->id]);
        $otherOfficer = OfficerFactory::create(['stationId' => $otherStation->id, 'firstName' => 'John', 'agencyId' => 'ag-124']);

        $request = new WP_REST_Request();
        $request->set_param('agency', $agency->id);
        $request->set_param('search', 'joh');

        $controller = new \BTN\BriefingRoom\API\GetOfficers();
        $response = $controller->handle($request);

        $this->assertEquals(1, count($response));
    }

    public function test_filter_by_agency_does_not_include_other_agency_officer()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create(['agencyId' => $agency->id]);
        $officer = OfficerFactory::create(['stationId' => $station->id]);

        $otherAgency = AgencyFactory::create();
        $otherStation = StationFactory::create(['agencyId' => $otherAgency->id]);
        $otherOfficer = OfficerFactory::create(['stationId' => $otherStation->id]);

        $request = new WP_REST_Request();
        $request->set_param('agency', $agency->id);
        $controller = new \BTN\BriefingRoom\API\GetOfficers();
        $officers = $controller->handle($request);

        $this->assertNotContains($otherOfficer->id, array_map(function($officer) {
            return $officer->id;
        }, $officers));
    }

    public function test_filter_by_agency_does_not_include_other_agency_officer_with_search()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create(['agencyId' => $agency->id]);
        $officer = OfficerFactory::create(['stationId' => $station->id, 'firstName' => 'John', 'agencyId' => 'ag-123']);

        $otherAgency = AgencyFactory::create();
        $otherStation = StationFactory::create(['agencyId' => $otherAgency->id]);
        $otherOfficer = OfficerFactory::create(['stationId' => $otherStation->id, 'firstName' => 'John', 'agencyId' => 'ag-123']);

        $request = new WP_REST_Request();
        $request->set_param('agency', $agency->id);
        $request->set_param('search', 'joh');
        $controller = new \BTN\BriefingRoom\API\GetOfficers();
        $officers = $controller->handle($request);

        $this->assertNotContains($otherOfficer->id, array_map(function($officer) {
            return $officer->id;
        }, $officers));
    }

    /**
     * When filtering by agency, the resulting join created an ambiguous `id`.
     */
    public function test_agency_filter_does_not_create_ambiguous_id()
    {
        $agency = AgencyFactory::create();
        $station = StationFactory::create(['agencyId' => $agency->id]);
        $officer = OfficerFactory::create(['firstName' => 'John', 'lastName' => 'Doe', 'stationId' => $station->id]);

        $request = new WP_REST_Request();
        $request->set_param('agency', $agency->id);

        $controller = new \BTN\BriefingRoom\API\GetOfficers();
        $response = $controller->handle($request);

        $this->assertEquals( $officer->id, $response[0]->id );
    }

    public function test_results_ordered_alphabetically_by_last_name()
    {
        OfficerFactory::create(['firstName' => 'John', 'lastName' => 'Doe']);
        OfficerFactory::create(['firstName' => 'Victoria', 'lastName' => 'Steele']);
        OfficerFactory::create(['firstName' => 'Ashley', 'lastName' => 'Atkinson']);


        $request = new WP_REST_Request();
        $request->set_param('orderBy', 'lastName');

        $controller = new \BTN\BriefingRoom\API\GetOfficers();
        $response = $controller->handle($request);

        // Assert alphabetical order by last name.
        $this->assertEquals('Atkinson', $response[0]->lastName);
        $this->assertEquals('Doe', $response[1]->lastName);
        $this->assertEquals('Steele', $response[2]->lastName);
    }
}
