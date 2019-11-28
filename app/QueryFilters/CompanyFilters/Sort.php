<?php

namespace App\QueryFilters\CompanyFilters;

use App\QueryFilters\Filter;

class Sort extends Filter
{
    protected function applyFilter($builder)
    {
        return orderBy('name', request($this->filterName()));
    }
}
