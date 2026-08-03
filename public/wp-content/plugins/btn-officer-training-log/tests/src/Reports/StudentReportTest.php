<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Factories\OfficerFactory;
use BTN\BriefingRoom\Factories\SergeantFactory;
use BTN\BriefingRoom\Factories\TrainingFactory;
use BTN\BriefingRoom\Factories\TrainingRecordFactory;
use BTN\BriefingRoom\Factories\TrainingSessionFactory;
use BTN\BriefingRoom\Reports\StudentReport;
use WP_UnitTestCase;

class StudentReportTest extends WP_UnitTestCase
{
    public function test_report_has_training_record()
    {
        $officer = OfficerFactory::create();
        $training = TrainingFactory::create([
            'post_title' => 'My First Training',
        ]);
        $session = TrainingSessionFactory::create([
            'trainingId' => $training->id,
            'sergeantId' => SergeantFactory::create()->id,
            'duration' => 45,
            'completedAt' => '2004-02-06 00:00:00',
        ]);
        $record = TrainingRecordFactory::create([
            'sessionId' => $session->id,
            'officerId' => $officer->id,
        ]);

        $report = new StudentReport($officer);
        $records = $report->getTrainingRecords();

        $this->assertEquals(1, count($records));
        $this->assertEquals($session->id, $records[0]->sessionId);
        $this->assertEquals('My First Training', $records[0]->trainingTitle);
        $this->assertEquals(45, $records[0]->duration);
        $this->assertEquals('2004-02-06 00:00:00', $records[0]->completionDate);
    }

    public function test_report_creates_csv()
    {
        $officer = OfficerFactory::create([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'badgeId' => 'badge-1234',
            'stateId' => 'state-1234',
            'agencyId' => 'agency-1234',
        ]);
        $training = TrainingFactory::create([
            'post_title' => 'My First Training',
        ]);
        $session = TrainingSessionFactory::create([
            'trainingId' => $training->id,
            'sergeantId' => SergeantFactory::create()->id,
            'duration' => 45,
            'completedAt' => '2004-02-06 00:00:00',
        ]);
        $record = TrainingRecordFactory::create([
            'sessionId' => $session->id,
            'officerId' => $officer->id,
        ]);

        $report = new StudentReport($officer);

//        var_dump($report->csv());

        $csv = <<<CSV
Date Range of Report: All,,,,
Rank: Officer,,,,
Facilitator First Name: John,,,,
Facilitator Last Name: Doe,,,,
Agency ID: agency-1234,,,,
Badge ID: badge-1234,,,,
State ID: state-1234,,,,
Total Training Blocks Completed: 1,,,,
Session ID,Training Title,Duration,Completion Date
$session->id,My First Training,45,2004-02-06 00:00:00
CSV;

        $this->assertEquals($csv, $report->csv());
    }

    public function test_filters_by_date_range()
    {
        $officer = OfficerFactory::create();
        $training = TrainingFactory::create([
            'post_title' => 'My First Training',
        ]);

        TrainingRecordFactory::create([
            'officerId' => $officer->id,
            'sessionId' => TrainingSessionFactory::create([
                'trainingId' => $training->id,
                'sergeantId' => SergeantFactory::create()->id,
                'duration' => 45,
                'completedAt' => '2004-02-06 00:00:00',
            ])->id,
        ]);

        // Should NOT be included
        TrainingRecordFactory::create([
            'officerId' => $officer->id,
            'sessionId' => TrainingSessionFactory::create([
                'trainingId' => $training->id,
                'sergeantId' => SergeantFactory::create()->id,
                'duration' => 45,
                'completedAt' => '2004-02-07 00:00:00',
            ])->id,
        ]);

        // Should NOT be included
        TrainingRecordFactory::create([
            'officerId' => $officer->id,
            'sessionId' => TrainingSessionFactory::create([
                'trainingId' => $training->id,
                'sergeantId' => SergeantFactory::create()->id,
                'duration' => 45,
                'completedAt' => '2004-02-05 23:59:59',
            ])->id,
        ]);

        $report = new StudentReport($officer);
        $report->setStartDate('2004-02-06');
        $report->setEndDate('2004-02-06');

        $this->assertEquals(1, count($report->getTrainingRecords()));
    }
}
