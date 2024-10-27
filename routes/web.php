<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/pizza', [PizzaController::class, 'index']);



Route::get('/pizza/{id}', function ($id) {
   
    return view('details',['id'=> $id]);
});

