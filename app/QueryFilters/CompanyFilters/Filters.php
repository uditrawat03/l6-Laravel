<?php

namespace App\QueryFilters\CompanyFilters;

use App\QueryFilters\Filter;

class Filters extends Filter
{
    private $builder;
    protected function applyFilter($builder)
    {
        // return $builder->where('approved', request($this->filterName()));
        $this->builder = $builder;
        $filters = request()->filters;

        foreach ($filters as $key => $value) {
            if (method_exists($this, $key)) {
                if ($value) {
                    $this->builder = $this->$key($value);
                }
            }
        }
        return $this->builder;
    }

    protected function code($code)
    {
        return $this->builder->where('code', 'LIKE', "%{$code}%");
    }

    protected function name($name)
    {
        return $this->builder->where('name', 'LIKE', "%{$name}%");
    }
}
