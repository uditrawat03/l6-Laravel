<?php

namespace App\QueryFilters\CompanyFilters;

use App\QueryFilters\Filter;

class Active extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->where('approved', request($this->filterName()));
    }
}
