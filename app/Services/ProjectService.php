<?php
namespace App\Services;

use App\Models\Project;
use Illuminate\Pipeline\Pipeline;

class ProjectService extends BaseService{

    public function __construct(Project $project){
        $this->model = $project;
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


    public function create($data){
        try{
            $members = $data['members'];
            unset($data['members']);
            $project = $this->model->create($data);
            $project->members()->attach($members);
            return $response = response()->json(["project" => $project]);
        }catch(Exception $e){
            return $response = response()->json(['error' => 'somthing went wrong'], 401);
        }
        
    }

}