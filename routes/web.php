<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesController;
use Illuminate\Routing\Route;

Route::get('/', [ImagesController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/create', [ImagesController::class, 'create']);

Route::post('/store', [ImagesController::class, 'store']);

Route::get('/show/{id}', [ImagesController::class, 'show']);

Route::get('/edit/{id}', [ImagesController::class, 'edit']);

Route::post('/update/{id}', [ImagesController::class, 'update']);

Route::get('/delete/{id}', [ImagesController::class, 'delete']);
