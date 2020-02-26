<?php
namespace App\Http\Controllers;

use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

class TaskController extends Controller{

    public function __construct(TaskRepository $task){
        $this->task = $task;        
    }


    public function index($projectId, Request $request){
        return $this->task->getTaskByProjectId($projectId, $request);
    }

    public function show($id){
        return $this->task->show($id);
    }

    public function create(Request $request){
        return $this->task->create($request);
    }

    public function update($id, Request $request){
        return $this->task->update($id, $request);
    }
    
    public function moved(Request $request){
        return $this->task->moved($request);
    }
}