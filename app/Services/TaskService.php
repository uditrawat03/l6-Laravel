<?php
namespace App\Services;

use App\Models\Task;
use Illuminate\Pipeline\Pipeline;

class TaskService extends BaseService{

    public function __construct(Task $task){
        $this->model = $task;
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

    public function getTaskByProjectId($projectId){
        return $this->model->where('project_id', $projectId)->orderBy('id')->get();
    }

    public function taskMove($request){
        $taskId = (int) $request->draggableId;
        $workflowFrom = (int) $request->droppableIdStart;
        $workflowTo = (int) $request->droppableIdEnd;
        $orderFrom = (int) $request->droppableIndexStart;
        $orderTo = (int) $request->droppableIndexEnd;
       
        $tasks = $this->model->where('workflow_id', '=', $workflowTo)->skip($orderTo)
            ->take($this->model->where('workflow_id', '=', $workflowTo)->count())->get();


        foreach($tasks as $orderedTask){
            $orderTo = $orderTo + 1;
            // $orderedTask = $this->model->find($task->id);
            $orderedTask->display_order = $orderTo;
            $orderedTask->save();
        }

        $task = $this->model->find($taskId);
        $task->workflow_id = $workflowTo;
        $task->display_order = $request->droppableIndexEnd;
        $task->save();
    }

}