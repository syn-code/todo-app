<?php

use App\Http\Controllers\ToDoListController;
use App\Http\Controllers\ManageToDoController;
use App\Http\Controllers\ViewAddTaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/my-todo-list', [ToDoListController::class,'index'])->name('app.todo_list');
Route::get('/add-a-task', [ViewAddTaskController::class, 'index'])->name('app.add_a_task');
Route::post('/task/add', [ManageToDoController::class,'add'])->name('app.task.add');
