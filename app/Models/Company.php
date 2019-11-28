<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];


    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }


    public function class()
    {
        return $this->belongsTo(CompanyClass::class, 'class_id');
    }

    public function source()
    {
        return $this->belongsTo(CompanySource::class, 'source_id');
    }

    public function importance()
    {
        return $this->belongsTo(CompanyImportance::class, 'importance_id');
    }
}
