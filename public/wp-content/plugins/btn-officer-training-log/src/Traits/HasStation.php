<?php

namespace BTN\BriefingRoom\Traits;

use BTN\BriefingRoom\Station;

trait HasStation
{
    public function station(): Station
    {
        if(property_exists($this, 'stationId')) {
            return Station::find($this->stationId);
        }

        throw new \Exception('Station not found');
    }

    public function stationName(): string
    {
        try {
            return $this->station()->name;
        } catch (\Exception $e) {
            return '';
        }
    }
}
