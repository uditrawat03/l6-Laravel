<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Pipeline\Pipeline;

class CompanyService extends BaseService
{

    public function __construct(Company $company)
    {
        $this->model = $company;
        $this->filters = [
            \App\QueryFilters\CompanyFilters\Sort::class,
            \App\QueryFilters\CompanyFilters\Filters::class
        ];
    }


    public function query()
    {
        $this->model =  app(Pipeline::class)
            ->send($this->model->query())
            ->through($this->filters)
            ->thenReturn()
            ->with(['source']);

        return $this->model;
    }
}
