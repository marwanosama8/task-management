<?php

namespace App\Http\Requests\Task;

use App\Enums\Priority;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'priority' => ['required', Rule::enum(Priority::class)],
            'category_id' => ['integer', 'required', 'exists:categories,id'],
            'due_date' => ['required', 'date', 'date_format:Y-m-d'],
            'completed' => ['boolean'],
            'image_url' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
