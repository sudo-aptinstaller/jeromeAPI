<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/fetch-all-tasks', [App\Http\Controllers\TaskController::class, 'fetchTasks']);
Route::get('/fetch-task/{id}', [App\Http\Controllers\TaskController::class, 'fetchTask']);
Route::put('/edit-task/{id}', [App\Http\Controllers\TaskController::class, 'editTask']);
Route::post('/create-task', [App\Http\Controllers\TaskController::class, 'createTask']);
Route::delete('/delete-task/{id}', [App\Http\Controllers\TaskController::class, 'deleteTask']);