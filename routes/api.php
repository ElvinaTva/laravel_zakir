<?php

use App\Http\Controllers\AvailableBranchConrtoller;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|http://127.0.0.1:8000/api/user/1?first_name=Ehmed&last_name=Memmedov&email=e@m.ru&phone_number=1221212112&password=12345678

| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('user', UserController::class);
Route::resource('cars', CarsController::class);
Route::resource('branch', BranchController::class);
Route::resource('order', OrderController::class);
Route::resource('available-branch', AvailableBranchConrtoller::class);
Route::post('user-insert', [UserController::class, 'insertNewUser']);
