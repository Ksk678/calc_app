<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;
use LDAP\Result;

Route::get('/', function () {
    return view('welcome');
});

route::get('/calcs/hello', [CalcController::class, 'hello']);

Route::get('/calcs/{A}/{B}/{C}', [CalcController::class, 'Result']);
