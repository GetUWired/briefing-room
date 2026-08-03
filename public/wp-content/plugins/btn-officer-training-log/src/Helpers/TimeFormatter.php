<?php

namespace BTN\BriefingRoom\Helpers;

class TimeFormatter
{
    public static function minutesToHours($minutes)
    {
        $hours = floor($minutes / 60);
        $minutes = ($minutes % 60);
        return sprintf('%02dh %02dm', $hours, $minutes);
    }
}
