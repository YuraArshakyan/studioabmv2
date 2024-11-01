<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitedFormsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\adminController;
use App\Http\Middleware\checkAuth;
use App\Models\services;

Route::get('/', function () {

    $services = services::all();


    return view('welcome')->with(compact('services'));
});


Route::get('/projects', function () {
    return view('projects');
});

Route::controller(ServicesController::class)->group(function(){
    Route::get('/services/{id}', [ServicesController::class, 'index']);
});

Route::controller(SubmitedFormsController::class)->group(function(){
    Route::post('submitFormRequest', [SubmitedFormsController::class, 'store']);
    Route::post('submitFormCreateUser', [SubmitedFormsController::class, 'CreateUser']);
});

Route::controller(adminController::class)->group(function(){
    Route::get('Canvas_login_abm', [adminController::class, 'index']);
    Route::get('admin_index_dash', [adminController::class, 'admin_index_dash'])->name( 'adminController.admin_dash')->middleware(checkAuth::class);
    
    Route::get('admin_config', [adminController::class, 'admin_config'])->name( 'adminController.admin_config')->middleware(checkAuth::class);
    
    Route::get('admin_settings', [adminController::class, 'admin_settings'])->name( 'adminController.admin_settings')->middleware(middleware: checkAuth::class);
    Route::POST('/exportForms', [adminController::class, 'exportForms'])->middleware(checkAuth::class);
    Route::POST('changeConfigFront',[adminController::class, 'exportForms'])->middleware(checkAuth::class);
    Route::POST('changeConfigFront',[adminController::class, 'changeConfigFront'])->middleware(checkAuth::class);
    Route::GET('/logOut', [adminController::class, 'logOut']);
    Route::POST('/login', [adminController::class, 'login']);
});