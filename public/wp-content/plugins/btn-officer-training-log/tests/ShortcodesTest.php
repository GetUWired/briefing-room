<?php

use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\SergeantFactory;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;

class ShortcodesTest extends WP_UnitTestCase
{
    public function test_training_log_does_not_authorize_user()
    {
        $this->assertStringContainsString(
            'User role does not support training log',
            do_shortcode('[briefing_room_training_log]')
        );
    }

    public function test_training_log_authorizes_sergeant()
    {
        $sergeant = SergeantFactory::create([
            'userId' => wp_insert_user([
                'role' => Sergeant::ROLE,
                'user_login' => 'sergeant',
                'user_pass' => 'password',
            ]),
        ]);
        wp_set_current_user($sergeant->userId);

        $this->assertStringContainsString(
            'Record Training',
            do_shortcode('[briefing_room_training_log]')
        );
    }

    public function test_training_log_does_not_authorize_user_without_sergeant_record()
    {
        wp_set_current_user(wp_insert_user([
            'role' => Sergeant::ROLE,
            'user_login' => 'sergeant',
            'user_pass' => 'password',
        ]));

        $this->assertStringContainsString(
            'Facilitator record not found for current user',
            do_shortcode('[briefing_room_training_log]')
        );
    }

    public function test_training_log_authorizes_officer()
    {
        $officer = OfficerFactory::create([
            'userId' => wp_insert_user([
                'role' => Officer::ROLE,
                'user_login' => 'sergeant',
                'user_pass' => 'password',
            ]),
        ]);

        wp_set_current_user($officer->userId);

        $this->assertStringContainsString(
            'Log Training',
            do_shortcode('[briefing_room_training_log]')
        );
    }

    public function test_training_log_does_not_authorize_user_without_officer_record()
    {
        wp_set_current_user(wp_insert_user([
            'role' => Officer::ROLE,
            'user_login' => 'sergeant',
            'user_pass' => 'password',
        ]));

        $this->assertStringContainsString(
            'Student record not found for current user',
            do_shortcode('[briefing_room_training_log]')
        );
    }
}
