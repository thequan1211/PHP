<?php

use App\Http\Controllers\CalculateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cal
culate', [CalculateController::class, 'index']);
Route::post('/add', [CalculateController::class, 'addCal']);