<?php

namespace BTN\BriefingRoom\Traits;

use BTN\BriefingRoom\Agency;

trait HasAgency
{
    public function agency(): Agency
    {
        if(method_exists($this, 'station')) {
            if(method_exists($this->station(), 'agency')) {
                return $this->station()->agency();
            }
        }

        throw new \Exception('Agency not found');
    }

    public function agencyName(): string
    {
        try {
            return $this->agency()->name ?? '';
        } catch (\Exception $e) {
            return '';
        }
    }
}
