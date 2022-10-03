<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimauxController;
use App\Http\Controllers\NewAnimalController;


Route::get('/', [AnimauxController::class, "Home"])->name('Home');
Route::post('/create', [AnimauxController::class, "store"]);
Route::get('/AnimalEdit/{id}', [AnimauxController::class, "show"]);
Route::delete('/{id}/delete', [AnimauxController::class, "destroy"]);


Route::get('/NewAnimal', [NewAnimalController::class, "NewAnimal"])->name('NewAnimal');


Route::put('/AnimalEdit/{id}/update', [NewAnimalController::class, "update"]);
