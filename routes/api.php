<?php

use App\Http\Controllers\APIs\AuthController;
use App\Http\Controllers\APIs\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);


    // Route::apiResource('tasks', TaskController::class)->except(['create', 'edit']);

    Route::get('/', [TaskController::class, 'index']);
    Route::post('/', [TaskController::class, 'store']);
    Route::put('/tasks/{id}', [TaskController::class, 'update']);
    Route::get('/tasks/{id}', [TaskController::class, 'show']);
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
});
