<?php
namespace App\Services;

use App\Models\TaskPriority;
use Illuminate\Pipeline\Pipeline;

class TaskPriorityService extends BaseService{

    public function __construct(TaskPriority $taskType){
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