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
        return $this->company->query()->orderBy('id', 'DESC')->paginate($limit);
    }

    public function create(Request $request)
    {
        try{
            $params = $request->data;
            $params['code'] = strtoupper(uniqid("OR"));
            $company =  $this->company->create($params);
            return response()->json(['message' => 'Record added successfully'], 200);
        }catch(Exception $e){
            return response()->json(['error' => 'Somthing went wrong'], 401);
        }
        
    }


    public function detail($id)
    {
        return $this->company->query()->where('id', $id)->first();
    }
}
