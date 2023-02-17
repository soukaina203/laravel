<?php

use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\PersonnageController;



Route::controller(PersonnageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/personnage/create', 'create');
    Route::get('/personnage/{id}', 'show');
    Route::get('/personnage/{id}/edit', 'edit');
    Route::post('/personnage', 'store');
    Route::patch('/personnage/{id}', 'update');
    Route::delete('/personnage/{id}', 'destroy');
   });



