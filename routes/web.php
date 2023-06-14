<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TugasController;
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


Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);

Route::get('index', [TugasController::class, 'index']);
Route::post('index', [TugasController::class, 'store']);
Route::get('profile', [TugasController::class, 'profile']);



Route::get('index/create', [TugasController::class, 'create']);
Route::get('index/{id}/edit', [TugasController::class, 'edit']);
Route::patch('index/{id}', [TugasController::class, 'update']);
Route::delete('index/{id}/destroy', [TugasController::class, 'destroy']);


