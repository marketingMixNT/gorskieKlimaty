<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/o_nas', [PageController::class, 'about'])->name('about');
Route::get('/atrakcje', [PageController::class, 'attractions'])->name('attractions');
