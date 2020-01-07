<?php

namespace App\Services;

use App\Models\Module;
use Illuminate\Pipeline\Pipeline;

class ModuleService extends BaseService
{

    public function __construct(Module $module)
    {
        $this->model = $module;
        $this->filters = [];
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


    public function create($name){
        $module =  $this->model->create([
            'name' => $name
        ]);
    }
}
