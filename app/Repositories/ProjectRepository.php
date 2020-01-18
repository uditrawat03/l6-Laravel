<?php
namespace App\Repositories;

use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectRepository {

    public function __construct(ProjectService $project){
        $this->project = $project;
    }


    public function getAll(Request $request)
    {

        $limit = $request->limit ?: 10;
        return $this->project->query()->orderBy('id', 'DESC')->paginate($limit);
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