<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;
use App\Http\Requests\Task\IndexTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use App\Repositories\interfaces\TaskRepositoryInterface;

class TaskController extends Controller
{
    public function __construct(protected TaskRepositoryInterface $repository)
    {}

    public function index(IndexTaskRequest $request)
    {
        $tasks = $this->repository->all($request);
        return TaskResource::collection($tasks);
    }

    public function store(StoreTaskRequest $request)
    {
       $task = $this->repository->add($request);
       return TaskResource::make($task);
    }

    public function show(Task $task)
    {
        return TaskResource::make($task);
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task = $this->repository->update($request, $task);
        return TaskResource::make($task);
    }

    public function destroy(Task $task)
    {
        $this->repository->delete($task);
        return response()->json(status: 204);
    }
}
