<?php

namespace BTN\BriefingRoom\Concerns\Imports;

class Results
{
    public int $importCount = 0;

    public array $skippedRecords = [];

    public array $invalidRecords = [];

    public string $labelSingle = 'record';

    public string $labelPlural = 'records';

    public function setLabel($labelSingle, $labelPlural): void
    {
        $this->labelSingle = $labelSingle;
        $this->labelPlural = $labelPlural;
    }

    public function getLabel(): string
    {
        return $this->importCount === 1 ? $this->labelSingle : $this->labelPlural;
    }

    public function incrementImportCount(): void
    {
        $this->importCount++;
    }

    public function addSkippedRecord(array $record, string $error): void
    {
        $this->skippedRecords[] = array_merge($record, ['error' => $error]);
    }

    public function hasSkippedRecords(): bool
    {
        return !empty($this->skippedRecords);
    }

    public function getSkippedRecords(): array
    {
        return $this->skippedRecords;
    }

    public function addInvalidRecord(array $record, string $error): void
    {
        $this->invalidRecords[] = array_merge($record, ['error' => $error]);
    }

    public function hasInvalidRecords(): bool
    {
        return !empty($this->invalidRecords);
    }

    public function getInvalidRecords(): array
    {
        return $this->invalidRecords;
    }

    public function getImportCount(): int
    {
        return $this->importCount;
    }

    public function renderReportHTML(): string
    {
        ob_start();
        echo $this->getImportCount()
            ? sprintf('Added %d %s.', $this->getImportCount(), $this->getLabel())
            : sprintf('No %s added.', $this->getLabel());

        if($this->hasSkippedRecords()) {
            echo '<h2>Skipped Records</h2>';
            foreach($this->getSkippedRecords() as $skippedRecord) {
                echo '<pre>';
                foreach($skippedRecord as $key => $value) {
                    echo "$key: $value\n";
                }
                echo '</pre>';
            }
        }

        if($this->hasInvalidRecords()) {
            echo '<h2>Invalid Records</h2>';
            foreach($this->getInvalidRecords() as $invalidRecord) {
                echo '<pre>';
                foreach($invalidRecord as $key => $value) {
                    echo "$key: $value\n";
                }
                echo '</pre>';
            }
        }

        return ob_get_clean();
    }
}
