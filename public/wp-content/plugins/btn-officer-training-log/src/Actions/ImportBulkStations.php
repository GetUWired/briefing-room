<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Station;
use Exception;
use League\Csv\TabularDataReader;
use StellarWP\DB\DB;

class ImportBulkStations
{
    protected Agency $agency;

    public function __construct(Agency $agency)
    {
        $this->agency = $agency;
    }

    public function import(TabularDataReader $reader): bool
    {
        if(!in_array('Name', $reader->getHeader())) {
            throw new Exception('Invalid CSV file. Missing "Name" column.');
        }

        $insertValues = [];
        foreach($reader->getRecords() as $record) {
            $insertValues[] = sprintf("('%s', %d)", $record['Name'], $this->agency->id);
        }

        $query = sprintf(
            "INSERT INTO %s (name, agencyId) VALUES %s;",
            DB::prefix(Station::getTable()),
            implode(',', $insertValues)
        );

        return DB::query($query);
    }
}
