<?php

namespace App\Repositories;

use App\Models\Task;
use App\Enums\Priority;
use App\Services\ImageGeneratorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\interfaces\TaskRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class TaskRepository implements TaskRepositoryInterface
{
    public function __construct(protected Task $task, protected ImageGeneratorService $imageGeneratorService)
    {
    }

    public function all(Request $request): ?LengthAwarePaginator
    {
        $query = $this->task
            ->newQuery()
            ->orderBy('created_at', $request->get('sort', 'desc'));

        // if category_id exits -> filter it
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        // if priority exits -> filter it
        if ($request->filled('priority')) {
            $priority = Priority::from($request->get('priority'));
            $query->where('priority', $priority);
        }

        // if status exits -> filter it
        if ($request->filled('status')) {
            $query->where('completed', $request->get('status'));
        }

        return $query->paginate($request->get('per_page', 10));
    }

    public function add($request): ?Task
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            if (!isset($data['image_url']) || $data['image_url'] == '') {
                $generatedUrl = $this->imageGeneratorService->generateUrl($request->get('category_id'));
                $data['image_url'] = $generatedUrl;
            }

            $task = $this->task->create($data);
            DB::commit();
            return $task;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function delete(Task $task ): ?bool
    {
        return $task->delete();
    }

    public function update(Request $request, Task $task): ?Task
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $task = tap($task)?->update($data);
            DB::commit();
            return $task;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
