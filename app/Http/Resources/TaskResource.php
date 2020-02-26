<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
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
            'summary' => $this->summary,
            'description' => $this->description,
            'taskType' => $this->taskType->name,
            'taskPrioity' => $this->taskPriority->name,
            'workflowId' => $this->workflow_id,
            'taskStatus' => $this->taskWorkflow->title,
            'displayOrder' => $this->display_order
        ];
    }
}
