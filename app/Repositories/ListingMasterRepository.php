<?php

namespace App\Repositories;

use App\Services\CompanyClassService;
use App\Services\CompanyImportanceService;
use App\Services\CompanySourceService;
use Illuminate\Support\Str;

class ListingMasterRepository
{
    public function listing($masters)
    {
        $masters = explode(",", $masters);
        $data = [];
        $container = \Illuminate\Container\Container::getInstance();
        foreach ($masters as $master) {
            $function = str_replace("-", "_", $master);
            $function = Str::camel($function);
            if (method_exists($this, $function)) {
                $data[$function] = $container->call([$this, $function], []);
            }
        }
        return $data;
    }


    public function companySource(CompanySourceService $companySoruceService)
    {
        return $companySoruceService->get();
    }


    public function companyClass(CompanyClassService $companyClassService)
    {
        return $companyClassService->get();
    }


    public function companyImportance(CompanyImportanceService $companyImportanceService)
    {
        return $companyImportanceService->get();
    }
}
