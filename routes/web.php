<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function() {
    return view('about-us');
});

Route::get('/test', [\App\Http\Controllers\AboutUsController::class, 'index']);
