<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];


    public function taskType(){
        return $this->belongsTo('\App\Models\TaskType', "task_type");
    }


    public function taskPriority(){
        return $this->belongsTo('\App\Models\TaskPriority',"task_priority");
    }
    

    public function taskWorkflow(){
        return $this->belongsTo('\App\Models\ProjectWorkflow', "workflow_id");
    }
}
