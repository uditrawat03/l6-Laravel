<?php
namespace App\Services;

use App\Models\ProjectWorkflow;
use Illuminate\Pipeline\Pipeline;

class ProjectWorkflowService extends BaseService{

    public function __construct(ProjectWorkflow $projectWorkflow){
        $this->model = $projectWorkflow;
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

    public function getWorkflowByProjectId($projectId){
        return $this->model->where('project_id', $projectId)->orderBy('id')->get();
    }

}