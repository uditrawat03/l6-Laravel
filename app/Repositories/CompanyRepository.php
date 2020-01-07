<?php

namespace App\Repositories;

use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyRepository
{
    protected $company;

    public function __construct(CompanyService $company)
    {
        $this->company = $company;
    }


    public function getAll(Request $request)
    {

        $limit = $request->limit ?: 10;
        return $this->company->query()->paginate($limit);
    }

    public function create(Request $request)
    {
        $company =  $this->company->create([
            // 'uuid' => (string) Str::uuid(),
            'name' => $request->name,
            'code' => strtoupper(uniqid("OR"))
        ]);

        return $company;
    }


    public function detail($id)
    {
        return $this->company->query()->where('id', $id)->first();
    }
}
