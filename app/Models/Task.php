<?php

namespace App\Models;

use App\Enums\Priority;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'priority',
        'status',
        'due_date',
        'completed',
        'image_url',
        'category_id'
    ];
    protected function casts()
    {
        return [
            'due_date' => 'date',
            'completed' => 'boolean',
            'priority' => Priority::class,
        ];
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
