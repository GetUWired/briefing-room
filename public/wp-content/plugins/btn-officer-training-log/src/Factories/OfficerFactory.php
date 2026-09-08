<?php

namespace BTN\BriefingRoom\Factories;

use BTN\BriefingRoom\Officer;

class OfficerFactory extends AbstractFactory
{
    protected string $modelClass = Officer::class;

    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'emailAddress' => $this->faker->unique()->safeEmail,
            'rank' => 'Officer',
            'badgeId' => 'bg-' . $this->faker->numberBetween(1, 100),
            'stateId' => 'st-' . $this->faker->numberBetween(1, 100),
            'stationId' => function () {
                return StationFactory::create()->id;
            },
        ];
    }
}
