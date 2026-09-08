<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Factories\ManagerFactory;
use WP_UnitTestCase;

class ManagerTest extends WP_UnitTestCase
{
    public function test_manager_has_agency()
    {
        $agency = AgencyFactory::create();
        $manager = ManagerFactory::create([
            'organizationId' => $agency->id,
        ]);

        $this->assertEquals($agency->id, $manager->agency()->id);
    }
}
