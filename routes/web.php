<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/' , function (){
    $pizza =[
        "type" => "Ethiopian Pizza ",
        "price" => "357Birr",
        "Base" => "Meta and Egg"
    ];
    return view('Pizza',$pizza);
});


