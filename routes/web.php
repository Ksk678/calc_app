<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;
use LDAP\Result;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcs/{A}/{B}/{C}', [CalcController::class, 'Result']);
