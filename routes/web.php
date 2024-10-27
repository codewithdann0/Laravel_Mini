<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {
    $pizzas = [
        ["type" => "Ethiopian Pizza", "price" => "57", "base" => "Meta and Egg"],
        ["type" => "Ethiopian Pizza", "price" => "57", "base" => "Meta and Egg"],
        ["type" => "Ethiopian Pizza", "price" => "57", "base" => "Meta and Egg"]
    ];

    return view('Pizza', ['pizzas' => $pizzas, 'name' =>request('name'), 'age' => request('age')],);
});


