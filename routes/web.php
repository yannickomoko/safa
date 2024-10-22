<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ManageController::class, 'homepage']);
Route::get('about', [ManageController::class, 'about']);
Route::get('contact', [ManageController::class, 'contact']);
Route::get('location-des-voitures', [ManageController::class, 'location']);
Route::get('car-detail/{name}', [ManageController::class, 'CarDetail']);


Route::get('admin/login', [AuthController::class, 'login']);
Route::post('admin/login', [AuthController::class, 'auth']);
Route::get('admin/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'useradmin'], function(){

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/marques', [AdminController::class, 'listMarque']);
    Route::post('admin/marques', [AdminController::class, 'createMarque']);
    Route::post('admin/marques/{id}', [AdminController::class, 'editMarque']);
    Route::get('admin/marques/{id}', [AdminController::class, 'deleteMarque']);

    Route::get('admin/typecars', [AdminController::class, 'listTypeCar']);
    Route::post('admin/typecars', [AdminController::class, 'createTypeCar']);
    Route::post('admin/typecars/{id}', [AdminController::class, 'editTypeCar']);
    Route::get('admin/typecars/{id}', [AdminController::class, 'deleteTypeCar']); 

    Route::get('admin/bonplans', [AdminController::class, 'listBonplan']);
    Route::get('admin/bonplans/create', [AdminController::class, 'addBonplan']);
    Route::post('admin/bonplans/create', [AdminController::class, 'createBonplan']);
    Route::get('admin/bonplans/edit/{id}', [AdminController::class, 'editBonplan']);
    Route::post('admin/bonplans/edit/{id}', [AdminController::class, 'updateBonplan']);
    Route::get('admin/bonplans/delete/{id}', [AdminController::class, 'deleteBonplan']); 

    Route::get('admin/autorisations', [RoleController::class, 'index']);
    Route::get('admin/autorisations/create', [RoleController::class, 'create']);
    Route::post('admin/autorisations/create', [RoleController::class, 'store']);
    Route::get('admin/autorisations/edit/{id}', [RoleController::class, 'edit']);      
    Route::post('admin/autorisations/edit/{id}', [RoleController::class, 'update']);
    Route::get('admin/autorisations/delete/{id}', [RoleController::class, 'destroy']); 
    
    Route::get('admin/cars', [CarController::class, 'index']);
    Route::get('admin/cars/create', [CarController::class, 'create']);
    Route::post('admin/cars/create', [CarController::class, 'store']);
    Route::get('admin/cars/edit/{id}', [CarController::class, 'edit']);      
    Route::post('admin/cars/edit/{id}', [CarController::class, 'update']);
    Route::get('admin/cars/delete/{id}', [CarController::class, 'destroy']); 

    Route::get('admin/users', [UserController::class, 'list']);
    Route::get('admin/users/create', [UserController::class, 'create']); 
    Route::post('admin/users/create', [UserController::class, 'store']);
    Route::get('admin/users/edit/{id}', [UserController::class, 'edit']);
    Route::post('admin/users/edit/{id}', [UserController::class, 'update']);
    Route::get('admin/users/delete/{id}', [UserController::class, 'delete']);
});