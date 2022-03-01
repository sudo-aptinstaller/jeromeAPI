<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/fetch-all-tasks', [App\Http\Controllers\TaskController::class, 'fetchTasks']);
Route::get('/fetch-task/{id}', [App\Http\Controllers\TaskController::class, 'fetchTask']);
Route::post('/edit-task/{id}', [App\Http\Controllers\TaskController::class, 'editTask']);
Route::post('/create-task', [App\Http\Controllers\TaskController::class, 'createTask']);
Route::delete('/delete-task/{id}', [App\Http\Controllers\TaskController::class, 'deleteTask']);