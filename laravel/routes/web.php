<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



route::get('page', ['\App\Http\Controllers\PageController','index']);
