<?php

use App\Http\Controllers\BonjourController;
use Illuminate\Support\Facades\Route;

// MVC: Model(BD) View Controller

// localhost:8000/
Route::get('/', function () {
    return view('welcome');
})->name("welcome");

// localhost:8000/bonjour
Route::get('/hello', [BonjourController::class, "bonjourVide"])
    ->name("bjr");

// use App\Http\Controllers\BonjourController;
Route::get(
    '/bonjour/{nom}',
    [BonjourController::class, "bonjourNom"]
);


// localhost:8000/bonjour/h/ali
// $ggg = h
// $nom = ali
Route::get(
    '/bonjour/{g}/{n}',
    [BonjourController::class, "bonjourGender"]
);

// localhost:8000/about
Route::get('/about-us', function () {
    return view('about');
})->name("abt");

// github desktop (software )
// creer repo : projet laravel
