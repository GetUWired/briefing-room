<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Factories\ManagerFactory;
use BTN\BriefingRoom\Manager;
use WP_UnitTestCase;

class UserLoginTest extends WP_UnitTestCase
{
    public function test_records_user_login()
    {
        $user = new \WP_User(1);
        $user->roles = [Manager::ROLE];

        /** @var Manager $manager */
        $manager = ManagerFactory::create([
            'userId' => 1,
        ]);

        do_action('wp_login', 'manager', $user);

        $this->assertEquals(1, $manager->logins()->count());
    }
}
