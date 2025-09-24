<?php

namespace App\Http\Resources;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Task */
class TaskResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'completed' => $this->completed,
            'created_at' => $this->created_at,
            'image_url' => $this->image_url,
            'updated_at' => $this->updated_at,
            'category_id' => $this->category_id,
        ];
    }
}
