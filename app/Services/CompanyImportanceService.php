<?php

namespace App\Services;

use App\Models\CompanyImportance;

class CompanyImportanceService extends BaseService
{
    public function __construct(CompanyImportance $companyImportance)
    {
        $this->model = $companyImportance;
    }
}
