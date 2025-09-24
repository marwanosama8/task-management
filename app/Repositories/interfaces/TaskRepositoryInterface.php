<?php

namespace App\Repositories\interfaces;

use App\Models\Task;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface TaskRepositoryInterface
{
    function all(Request $request): ?LengthAwarePaginator;
    function add(Request $request): ?Task;
    function delete(Task $task): ?bool;
    function update(Request $request, Task $task): ?Task;
}
