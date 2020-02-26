<?php
namespace App\Http\Controllers;

use App\Repositories\ProjectWorkflowRepository;
use Illuminate\Http\Request;

class ProjectWorkflowController extends Controller{

    public function __construct(ProjectWorkflowRepository $projectWorkflow){
        $this->projectWorkflow = $projectWorkflow;        
    }


    public function index($projectId, Request $request){
        return $this->projectWorkflow->getAll($projectId, $request);
    }

    public function show($id){
        return $this->projectWorkflow->show($id);
    }

    public function create(Request $request){
        return $this->projectWorkflow->create($request);
    }

    public function update($id, Request $request){
        return $this->projectWorkflow->update($id, $request);
    }
    
}