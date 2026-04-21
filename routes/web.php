<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('students', StudentController::class)->except(['create', 'store']);
Route::resource('animals', AnimalController::class);

