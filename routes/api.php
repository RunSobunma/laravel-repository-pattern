<?php

use App\Http\Controllers\API\todoController;
use illuminate\Support\Facades\Route;

Route::get('todo', [todoController::class , 'index']);
Route::post('store', [todoController::class, 'store']);