<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'color',
        'icon_url',
        'image_filter',
        'image_seed_offset'
    ];
    public function getImageSeederAttribute(): string
    {
        return $this->image_seed_offset . '/?' . $this->image_filter;
    }
}
