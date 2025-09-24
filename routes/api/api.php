<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\TaskController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth.api')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::apiResource('tasks', TaskController::class);
        Route::apiResource('categories', CategoryController::class)->only('index', 'show');
    });
});
