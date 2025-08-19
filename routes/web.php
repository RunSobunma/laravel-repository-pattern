<?php

use App\Http\Controllers\API\todoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
