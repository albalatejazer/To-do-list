<?php

use App\Http\Controllers\to_dosContoller;
use App\Http\Controllers\TodolistController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get(
    '/',

    [TodolistController::class, 'index']
);
Route::delete(
    'todos/{todolist}',
    [TodolistController::class, 'destroy']
);
Route::post(
    'todos/create',
    [TodolistController::class, 'store']
);
Route::put(
    'todos/{todolist}',
    [TodolistController::class, 'update']
);
Route::get('todos/{todolist}/edit', [TodolistController::class, 'edit']);


