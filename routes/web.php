<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TasksController;

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

Route::get('/', [MainController::class, 'home_page']);
Route::get('/form', [MainController::class, 'form_page'])->name('form');
Route::get('/tasks', [MainController::class, 'tasks_page']);
Route::post('/form/submit', [TasksController::class, 'submit']);
