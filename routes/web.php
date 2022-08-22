<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
// use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/todo', [App\Http\Controllers\TodoController::class, 'index']);
Route::get('/todo/add', [App\Http\Controllers\TodoController::class, 'create']);
Route::get('/todo/{id}/edit', [App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/todo/upload', [App\Http\Controllers\TodoController::class, 'upload']);
Route::patch('/todo/update', [App\Http\Controllers\TodoController::class, 'update']);
Route::get('/todo/{id}/completed', [App\Http\Controllers\TodoController::class, 'completed']);
Route::get('/todo/{id}/delete', [App\Http\Controllers\TodoController::class, 'delete']);


