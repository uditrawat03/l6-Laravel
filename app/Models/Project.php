<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    /** User and Project relation */
    public function members(){
        return $this->belongsToMany('\App\Models\User', 'project_members', 'project_id', 'user_id');
    }


    /**Project workflow */
    public function workflows(){
        return $this->hasMany('\App\Models\ProjectWorkflow');
    }
}
