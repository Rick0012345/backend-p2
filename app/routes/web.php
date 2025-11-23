<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categorias', CategoryController::class);

Route::get('/ping', function () { return 'ok'; });
