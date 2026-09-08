<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Concerns\Imports\Results;
use Exception;
use League\Csv\TabularDataReader;

class ImportBulkOfficers
{
    const REQUIRED_COLUMNS = [
        'Rank',
        'First Name',
        'Last Name',
        'Email',
        'Station',
        'Badge ID',
        'State ID',
        'Agency ID',
        'Send Welcome',
    ];

    protected Agency $agency;

    public function __construct(Agency $agency)
    {
        $this->agency = $agency;
    }

    /**
     * @throws Exception
     */
    public function import(TabularDataReader $reader): Results
    {
        $this->validateHeaders($reader->getHeader());

        $stations = $this->agency->stations()->getAll();
        $stationLookup = [];
        foreach($stations as $station) {
            $stationLookup[$station->name] = $station->id;
        }

        $results = new Results();
        $results->setLabel('student', 'students');

        $records = [];
        foreach($reader->getRecords() as $record) {

            foreach(self::REQUIRED_COLUMNS as $requiredColumn) {
                if(!isset($record[$requiredColumn])) {
                    $results->addInvalidRecord($record, "Missing '$requiredColumn'.");
                    continue 2;
                }
            }

            if(!filter_var($record['Email'], FILTER_VALIDATE_EMAIL)) {
                $results->addInvalidRecord($record, 'Invalid "Email Address".');
                continue;
            }

            if(!isset($stationLookup[$record['Station']])) {
                $results->addInvalidRecord($record, 'Invalid "Station".');
                continue;
            }

            $records[] = $record;
        }

        // Import the CSV data
        foreach($records as $record) {
            try {
                $organizationId = $this->agency->id;
                $stationId = $stationLookup[trim($record['Station'])];
                $sendWelcome = !empty($record['Send Welcome']) && in_array(strtolower($record['Send Welcome']), ['yes', 'y', 'true', '1']);
                (new \BTN\BriefingRoom\Actions\CreateOfficer)(
                    $record['First Name'],
                    $record['Last Name'],
                    $record['Email'],
                    $organizationId,
                    $stationId,
                    $record['Badge ID'],
                    $record['State ID'],
                    $record['Agency ID'],
                    $record['Rank'],
                    $sendWelcome
                );
                $results->incrementImportCount();
            } catch(Exception $e) {
                $results->addSkippedRecord($record, $e->getMessage());
            }
        }

        return $results;
    }

    /**
     * @throws Exception
     */
    public function validateHeaders($headers)
    {
        foreach(self::REQUIRED_COLUMNS as $column) {
            if(!in_array($column, $headers)) {
                throw new Exception("Invalid CSV file. Missing '$column' column.");
            }
        }
    }
}
