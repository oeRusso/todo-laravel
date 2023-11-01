<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

;
Route::get('/', [TaskController::class,'index'])->name('task.index');
Route::get('/tasks', [TaskController::class,'index'])->name('task.index');

Route::get('/tasks/create', [TaskController::class,'create'])->name('task.create');
Route::post('/tasks', [TaskController::class,'store'])->name('task.store');
Route::patch('/tasks/{id}', [TaskController::class,'update'])->name('task.update');
Route::delete('/tasks/{id}', [TaskController::class,'delete'])->name('task.delete');





