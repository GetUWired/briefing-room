<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Actions\MigrateIdentifiersToUserId;
use BTN\BriefingRoom\Factories\ManagerFactory;
use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\SergeantFactory;
use BTN\BriefingRoom\Factories\TrainingRecordFactory;
use BTN\BriefingRoom\Factories\TrainingSessionFactory;
use BTN\BriefingRoom\TrainingRecord;
use BTN\BriefingRoom\TrainingSession;
use WP_UnitTestCase;

class MigrateIdentifiersToUserIdTest extends WP_UnitTestCase
{
    public function test_migrates_training_records_for_officer()
    {
        $officer = OfficerFactory::create(['userId' => 9001]);
        TrainingRecordFactory::create([
            'sessionId' => TrainingSessionFactory::create([
                'sergeantId' => SergeantFactory::create()->id,
            ])->id,
            'officerId' => $officer->id,
        ]);

        global $wpdb;
        $migration = new MigrateIdentifiersToUserId($wpdb);
        $migration->migrate('btn_training_records', 'officerId', $officer);
        $migration->migrate('btn_training_sessions', 'officerId', $officer);

        $records = TrainingRecord::query()->where('userId', $officer->userId);
        $this->assertEquals(1, $records->count());
    }

    public function test_migrates_training_sessions_for_officer()
    {
        $officer = OfficerFactory::create(['userId' => 9001]);
        TrainingSessionFactory::create([
            'officerId' => $officer->id,
        ]);

        global $wpdb;
        $migration = new MigrateIdentifiersToUserId($wpdb);
        $migration->migrate('btn_training_sessions', 'officerId', $officer);

        $sessions = TrainingSession::query()->where('userId', $officer->userId);
        $this->assertEquals(1, $sessions->count());
    }


    public function test_migrates_training_sessions_for_sergeant()
    {
        $sergeant = SergeantFactory::create(['userId' => 9001]);
        TrainingSessionFactory::create([
            'sergeantId' => $sergeant->id,
        ]);

        global $wpdb;
        $migration = new MigrateIdentifiersToUserId($wpdb);
        $migration->migrate('btn_training_sessions', 'sergeantId', $sergeant);

        $sessions = TrainingSession::query()->where('userId', $sergeant->userId);
        $this->assertEquals(1, $sessions->count());
    }

    public function test_migrates_training_sessions_for_manager()
    {
        $manager = ManagerFactory::create(['userId' => 9001]);
        TrainingSessionFactory::create([
            'managerId' => $manager->id,
        ]);

        global $wpdb;
        $migration = new MigrateIdentifiersToUserId($wpdb);
        $migration->migrate('btn_training_sessions', 'managerId', $manager);

        $sessions = TrainingSession::query()->where('userId', $manager->userId);
        $this->assertEquals(1, $sessions->count());
    }
}
