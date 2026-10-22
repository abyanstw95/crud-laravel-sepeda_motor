<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepedaMotorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sepeda_motor', [SepedaMotorController::class, 'index']);