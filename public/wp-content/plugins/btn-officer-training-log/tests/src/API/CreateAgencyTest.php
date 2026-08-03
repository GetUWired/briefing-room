<?php

namespace BTN\BriefingRoom\Tests\API;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\API\CreateAgency;
use WP_REST_Request;
use WP_UnitTestCase;

class CreateAgencyTest extends WP_UnitTestCase
{
    public function test_filter_by_agency()
    {
        $request = new WP_REST_Request();
        $request->set_param('contactId', '1234');
        $request->set_param('name', 'New Agency');
        $request->set_param('state', 'TN');

        $controller = new CreateAgency();
        $controller->handle($request);

        $agency = Agency::query()
            ->where('name', 'New Agency')
            ->where('state', 'TN')
            ->get();

        $this->assertEquals( 'New Agency', $agency->name );
        $this->assertEquals( 'TN', $agency->state );
    }
}
