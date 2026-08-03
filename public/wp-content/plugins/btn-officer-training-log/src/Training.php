<?php

namespace BTN\BriefingRoom;

class Training extends Framework\PostModel
{
    public static function fromCurrentPost()
    {
        return new static(get_the_ID());
    }

    public function getDurationInMinutes()
    {
        if(!function_exists('get_field')) return 0;

        $hours = (int) get_field('video_duration_hours', $this->id);
        $minutes = (int) get_field('video_duration_mins', $this->id);

        return ($hours * 60) + $minutes;
    }
}
