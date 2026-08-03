<?php

namespace BTN\BriefingRoom\Factories;

use BTN\BriefingRoom\TrainingSession;

class TrainingSessionFactory extends AbstractFactory
{
    protected string $modelClass = TrainingSession::class;

    public function definition()
    {
        // Note: Must specify manager, sergeant, or officer as attribute.
        return [
            'trainingId' => function() {
                return TrainingFactory::create()->id;
            },
            'managerId' => null,
            'sergeantId' => null,
            'officerId' => null,
            'duration' => $this->faker->numberBetween(30, 60),
            'completedAt' => $this->faker->date(),
            'userId' => 0,
        ];
    }
}
