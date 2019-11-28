<?php

namespace App\Services;

use App\Models\CompanySource;

class CompanySourceService extends BaseService
{
    public function __construct(CompanySource $companySource)
    {
        $this->model = $companySource;
    }
}
