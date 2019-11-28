<?php

namespace App\Http\Resources\api\crm\company;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'class' => $this->class->name,
            'source' => $this->source->name,
            'importance' => $this->importance->name
        ];
    }
}
