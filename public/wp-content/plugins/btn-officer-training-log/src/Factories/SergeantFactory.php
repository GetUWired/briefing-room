<?php

namespace BTN\BriefingRoom\Factories;

use BTN\BriefingRoom\Sergeant;

class SergeantFactory extends AbstractFactory
{
    protected string $modelClass = Sergeant::class;

    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'emailAddress' => $this->faker->unique()->safeEmail,
            'stationId' => function () {
                return StationFactory::create()->id;
            },
        ];
    }
}
