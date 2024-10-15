<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ManageController::class, 'homepage']);
Route::get('about', [ManageController::class, 'about']);
Route::get('contact', [ManageController::class, 'contact']);
Route::get('location-des-voitures', [ManageController::class, 'location']);
Route::get('location-des-voitures/1', [ManageController::class, 'detail']);


Route::get('admin/login', [AuthController::class, 'login']);
Route::post('admin/login', [AuthController::class, 'auth']);
Route::get('admin/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'useradmin'], function(){

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
});