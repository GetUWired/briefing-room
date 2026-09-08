<?php

namespace BTN\BriefingRoom\Factories;

use BTN\BriefingRoom\Station;

class StationFactory extends AbstractFactory
{
    protected string $modelClass = Station::class;

    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'agencyId' => function() {
                return AgencyFactory::create()->id;
            },
        ];
    }
}
