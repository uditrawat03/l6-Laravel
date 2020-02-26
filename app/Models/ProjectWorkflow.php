<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectWorkflow extends Model
{
    protected $guarded = [];


    public function tasks() {
        return $this->hasMany('\App\Models\Task', 'workflow_id');
    }
}
