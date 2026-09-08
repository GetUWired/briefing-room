<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Factories\ManagerFactory;
use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\TrainingFactory;
use BTN\BriefingRoom\Factories\TrainingRecordFactory;
use BTN\BriefingRoom\Factories\TrainingSessionFactory;
use BTN\BriefingRoom\Reports\ManagerFacilitatorReport;
use WP_UnitTestCase;

class ManagerFacilitatorReportTest extends WP_UnitTestCase
{
    public function test_report_has_training_sessions()
    {
        $manager = ManagerFactory::create();
        $training = TrainingFactory::create([
            'post_title' => 'My First Training',
        ]);
        $session = TrainingSessionFactory::create([
            'trainingId' => $training->id,
            'managerId' => $manager->id,
            'duration' => 45,
            'completedAt' => '2004-02-06 00:00:00',
        ]);

        // First Training Record
        TrainingRecordFactory::create([
            'sessionId' => $session->id,
            'officerId' => OfficerFactory::create()->id,
        ]);

        // Second Training Record
        TrainingRecordFactory::create([
            'sessionId' => $session->id,
            'officerId' => OfficerFactory::create()->id,
        ]);

        $report = new ManagerFacilitatorReport($manager);
        $sessions = $report->getTrainingSessions();

        $this->assertEquals(1, count($sessions));
        $this->assertEquals(45, $sessions[0]->duration);
        $this->assertEquals(2, $sessions[0]->recordCount);
    }
}
