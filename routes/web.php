<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\dondeEstamosController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('inicio');

Route::resource('events', EventController::class);

Route::get('/dondeEstamos', dondeEstamosController::class)->name('dondeestamos');

Route::resource('players', PlayerController::class);

Route::resource('contact', ContactController::class);
