<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Category */
class CategoryResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'color' => $this->color,
            'icon_url' => $this->icon_url,
            'image_filter' => $this->image_filter,
            'image_seed_offset' => $this->image_seed_offset,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
