<?php

namespace BTN\BriefingRoom\Reports\Traits;

use StellarWP\DB\QueryBuilder\QueryBuilder;

trait HasDateRange
{
    protected $startDate;
    protected $endDate;

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDateFormatted($format = 'Y-m-d')
    {
        return date($format, strtotime($this->startDate));
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEndDateFormatted($format = 'Y-m-d 23:59:59')
    {
        return date($format, strtotime($this->endDate));
    }

    public function hasDateRange(): bool
    {
        return $this->startDate || $this->endDate;
    }

    public function getDateRangeFormatted(): string
    {
        if($this->startDate && $this->endDate) {
            return "$this->startDate - $this->endDate";
        } elseif($this->startDate) {
            return "$this->startDate and after";
        } elseif($this->endDate) {
            return "Before $this->endDate";
        } else {
            return 'All';
        }
    }

    public function filterQueryByDateRange(QueryBuilder &$query, string $column)
    {
        if($this->startDate) {
            $query->where($column, $this->getStartDateFormatted(), '>=');
        }
        if($this->endDate) {
            $query->where($column, $this->getEndDateFormatted(), '<=');
        }
    }
}
