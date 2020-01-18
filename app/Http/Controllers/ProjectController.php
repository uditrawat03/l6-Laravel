<?php
namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller{

    public function __construct(ProjectRepository $project){
        $this->project = $project;        
    }


    public function index(Request $request){
        return $this->project->getAll($request);
    }

    public function show($id){
        return $this->project->show($id);
    }

    public function create(Request $request){
        return $this->project->create($request);
    }

    public function update($id, Request $request){
        return $this->project->update($id, $request);
    }
    
}