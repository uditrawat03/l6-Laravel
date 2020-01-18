<?php
namespace App\Services;

use App\Models\TaskType;
use Illuminate\Pipeline\Pipeline;

class TaskTypeService extends BaseService{

    public function __construct(TaskType $taskType){
        $this->model = $taskType;
        $this->filters = [];
    }


    public function query()
    {
        $this->model =  app(Pipeline::class)
            ->send($this->model->query())
            ->through($this->filters)
            ->thenReturn();

        return $this->model;
    }

}