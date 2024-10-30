<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\SubmitedFormsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/projects', function () {
    return view('projects');
});

Route::get('/services', function () {
    return view('services');
});

Route::controller(SubmitedFormsController::class)->group(function(){
    Route::post('/submitFormRequest', [SubmitedFormsController::class, 'store']);
});