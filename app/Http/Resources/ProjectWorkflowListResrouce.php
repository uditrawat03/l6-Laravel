<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectWorkflowListResrouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'projectId' => $this->project_id,
            'tasks' => TaskResource::collection($this->tasks()->orderBy('display_order', 'ASC')->get())
        ];
    }
}
