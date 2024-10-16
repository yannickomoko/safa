<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

    Route::get('admin/autorisations', [RoleController::class, 'index']);
    Route::get('admin/autorisations/create', [RoleController::class, 'create']);
    Route::post('admin/autorisations/create', [RoleController::class, 'store']);
    Route::get('admin/autorisations/edit/{id}', [RoleController::class, 'edit']);      
    Route::post('admin/autorisations/edit/{id}', [RoleController::class, 'update']);
    Route::get('admin/autorisations/delete/{id}', [RoleController::class, 'destroy']); 

    Route::get('admin/users', [UserController::class, 'list']);
    Route::get('admin/users/create', [UserController::class, 'create']);
    Route::post('admin/users/create', [UserController::class, 'store']);
    Route::get('admin/users/edit/{id}', [UserController::class, 'edit']);
    Route::post('admin/users/edit/{id}', [UserController::class, 'update']);
    Route::get('admin/users/delete/{id}', [UserController::class, 'destroy']);
});