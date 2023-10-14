<?php

use App\Http\Controllers\commentController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\userController;

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

Route::get('/',[registerController::class , 'getRegister']);
Route::post('/register',[registerController::class , 'postRegister']);
Route::get('/login',[loginController::class , 'getLogin']);
Route::post('/login',[loginController::class , 'postLogin']);
Route::resource('projects',ProjectController::class);
Route::resource('tasks',taskController::class);
Route::get('/tasks/{id}/delete',[deleteController::class,'deleteTask']);
Route::get('/tasks/{id}/comment',[commentController::class,'viewComments']);
Route::get('/tasks/{id}/comment/create',[commentController::class,'addComments']);
Route::post('/tasks/{id}/comment/create',[commentController::class,'storeComments']);

Route::get('/usertasks',[userController::class , 'index']);
