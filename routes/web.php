<?php

use App\Http\Controllers\TaskController;
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

Route::get("/", [TaskController::class, 'index'])->name('task.index');
Route::get("/create-task", [TaskController::class, 'create'])->name('task.create');
Route::post('/create-task', [TaskController::class, 'store'])->name('task.store');
Route::get('/update-task/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/update-task/{task}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/delete-task/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
