<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Actions\CreateManager;
use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Factories\AgencyFactory;
use BTN\BriefingRoom\Manager;
use WP_UnitTestCase;

class CreateManagerTest extends WP_UnitTestCase
{
    public function test_creates_manager_with_associated_user_id()
    {
        $user = self::factory()->user->create_and_get();

        /** @var Agency $agency */
        $agency = AgencyFactory::create();

        $manager = (new CreateManager)->__invoke($user, $agency->id);

        $this->assertInstanceOf(Manager::class, $manager);
        $this->assertEquals($user->ID, $manager->userId);
    }
}
