<?php
namespace App\Repositories;

use App\Services\TaskService;
use Illuminate\Http\Request;
use App\Http\Resources\TaskResource;


class TaskRepository {


    public function __construct(TaskService $task){
        $this->task = $task;
    }


    public function getTaskByProjectId($projectId, Request $request){        
        return $this->task->getTaskByProjectId($projectId);
    }


    public function show($taskId){
        $task = $this->task->find($taskId);
        return new TaskResource($task);
    }


    public function create(Request $request){
        $data = $request->data;
        return $this->task->create($data);
    }


    public function moved(Request $request){
        
        $this->task->taskMove($request);
        return ['task_moved_successfully', 200];
    }
}