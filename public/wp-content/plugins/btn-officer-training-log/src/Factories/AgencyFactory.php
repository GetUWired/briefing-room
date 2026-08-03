<?php

namespace BTN\BriefingRoom\Factories;

use BTN\BriefingRoom\Agency;

class AgencyFactory extends AbstractFactory
{
    protected string $modelClass = Agency::class;

    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'state' => $this->faker->stateAbbr,
        ];
    }
}
