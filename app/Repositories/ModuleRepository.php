<?php

namespace App\Repositories;

use App\Services\ModuleService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ModuleRepository
{
    protected $module;

    public function __construct(ModuleService $company)
    {
        $this->module = $module;
    }


    public function getAll(Request $request)
    {

        $limit = $request->limit ?: 10;
        return $this->module->query()->paginate($limit);
    }

    public function create(Request $request)
    {
        $module =  $this->module->create($request->name);
        return $module;
    }


    public function detail($id)
    {
        return $this->module->query()->where('id', $id)->first();
    }
}
