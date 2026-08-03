<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Factories\ManagerFactory;
use BTN\BriefingRoom\Manager;
use WP_UnitTestCase;

class AgencyTest extends WP_UnitTestCase
{
    public function test_agency_has_manager()
    {
        /** @var Agency $agency */
        $agency = AgencyFactory::create();

        /** @var Manager $manager */
        $manager = ManagerFactory::create([
            'organizationId' => $agency->id,
        ]);

        $this->assertEquals($manager->id, $agency->managers()->get()->id);
    }

    public function test_agency_has_manager_email()
    {
        /** @var Agency $agency */
        $agency = AgencyFactory::create();

        /** @var Manager $manager */
        $manager = ManagerFactory::create([
            'emailAddress' => 'manager@example.com',
            'organizationId' => $agency->id,
        ]);

        $this->assertEquals('manager@example.com', $agency->managerEmail());
    }
}
