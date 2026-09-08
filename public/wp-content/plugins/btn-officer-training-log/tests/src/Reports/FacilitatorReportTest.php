<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\SergeantFactory;
use BTN\BriefingRoom\Factories\TrainingFactory;
use BTN\BriefingRoom\Factories\TrainingRecordFactory;
use BTN\BriefingRoom\Factories\TrainingSessionFactory;
use BTN\BriefingRoom\Reports\FacilitatorReport;
use WP_UnitTestCase;

class FacilitatorReportTest extends WP_UnitTestCase
{
    public function test_report_has_training_sessions()
    {
        $sergeant = SergeantFactory::create();
        $training = TrainingFactory::create([
            'post_title' => 'My First Training',
        ]);
        $session = TrainingSessionFactory::create([
            'trainingId' => $training->id,
            'sergeantId' => $sergeant->id,
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

        $report = new FacilitatorReport($sergeant);
        $sessions = $report->getTrainingSessions();

        $this->assertEquals(1, count($sessions));
        $this->assertEquals(45, $sessions[0]->duration);
        $this->assertEquals(2, $sessions[0]->recordCount);
    }
}
