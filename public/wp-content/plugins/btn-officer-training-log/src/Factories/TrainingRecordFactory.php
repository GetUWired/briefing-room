<?php

namespace BTN\BriefingRoom\Factories;

use BTN\BriefingRoom\TrainingRecord;

class TrainingRecordFactory extends AbstractFactory
{
    protected string $modelClass = TrainingRecord::class;

    public function definition()
    {
        // Note: Must specify manager, sergeant, or officer as attribute.
        return [
            'sessionId' => function() {
                return TrainingSessionFactory::create()->id;
            },
            'officerId' => function() {
                return OfficerFactory::create()->id;
            },
            'userId' => 0,
        ];
    }
}
