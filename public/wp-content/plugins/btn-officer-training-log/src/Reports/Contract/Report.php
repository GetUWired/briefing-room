<?php

namespace BTN\BriefingRoom\Reports\Contract;

interface Report
{
    public function getFileName(): string;
    public function csv(): string;
    public function html(): string;
}
