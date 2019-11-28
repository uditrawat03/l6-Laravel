<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    private $company;

    public function __construct(CompanyRepository $company)
    {
        $this->company = $company;
    }

    public function index(Request $request){
        return $this->company->getAll($request);
    }


    public function store(Request $request){
        return $this->company->create($request);
    }
}
