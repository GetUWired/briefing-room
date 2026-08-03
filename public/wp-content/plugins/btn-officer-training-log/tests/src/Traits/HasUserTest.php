<?php

namespace BTN\BriefingRoom\Tests\Traits;

use BTN\BriefingRoom\Factories\SergeantFactory;
use BTN\BriefingRoom\Framework\Exceptions\NotFound;
use BTN\BriefingRoom\Sergeant;
use WP_UnitTestCase;

class HasUserTest extends WP_UnitTestCase
{
    public function test_model_has_user()
    {
        $userId = wp_insert_user([
            'role' => Sergeant::ROLE,
            'user_login' => 'sergeant',
            'user_pass' => 'password',
        ]);

        SergeantFactory::create([
            'userId' => $userId,
        ]);

        $sergeant = Sergeant::findByUserId($userId);

        $this->assertEquals($userId, $sergeant->userId);
        $this->assertInstanceOf(Sergeant::class, $sergeant);
    }

    public function test_model_with_user_id_not_found_throws_exception()
    {
        $this->expectException(NotFound::class);
        Sergeant::findByUserId(1234);
    }
}
