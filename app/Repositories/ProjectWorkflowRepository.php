<?php
namespace App\Repositories;

use App\Services\ProjectWorkflowService;
use App\Http\Resources\ProjectWorkflowListResrouce;
use Illuminate\Http\Request;

class ProjectWorkflowRepository {

    public function __construct(ProjectWorkflowService $project){
        $this->project = $project;
    }


    public function getAll($projectId, Request $request)
    {
        return ProjectWorkflowListResrouce::collection($this->project->getWorkflowByProjectId($projectId));
    }


    public function show($id){
        return $this->project->find($id);
    }


    public function create(Request $request){

        $data = $request->data;
        return $this->project->create($data);
    }


    public function update($id, Request $request){

        $project = $this->project->find($id);
        
        if($project){
            $data = [
                'title' => $request->data['title'],
                'description' => $request->data['description']
            ];
    
            $this->project->updateById($id, $data);

            $response = $project;
        }else{
            $response = response()->json(['error' => 'Invalid Project id'], 401);
        }

        return $response;
    }
    

}