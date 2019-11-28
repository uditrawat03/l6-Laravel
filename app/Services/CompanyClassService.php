<?php

namespace App\Services;

use App\Models\CompanyClass;

class CompanyClassService extends BaseService
{
    public function __construct(CompanyClass $companyClass)
    {
        $this->model = $companyClass;
    }
}
