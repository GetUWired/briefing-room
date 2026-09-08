<?php

namespace BTN\BriefingRoom\Tests;

use BTN\BriefingRoom\Factories\StationFactory;
use BTN\BriefingRoom\Station;
use WP_UnitTestCase;

class StationTest extends WP_UnitTestCase
{
    public function test_station_can_be_deleted()
    {
        /** @var Station $station */
        $station = StationFactory::create();

        $station->delete();

        $this->assertFalse(Station::exists($station->id));
    }
}
