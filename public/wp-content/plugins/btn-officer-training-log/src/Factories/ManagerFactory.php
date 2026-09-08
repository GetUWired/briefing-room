<?php

namespace BTN\BriefingRoom\Factories;

use BTN\BriefingRoom\Manager;

class ManagerFactory extends AbstractFactory
{
    protected string $modelClass = Manager::class;

    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'emailAddress' => $this->faker->unique()->safeEmail,
            'organizationId' => function () {
                return StationFactory::create()->id;
            },
        ];
    }
}
