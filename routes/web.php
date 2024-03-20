<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/o_nas', [PageController::class, 'about'])->name('about');

Route::prefix('apartamenty')->name('apartments.')->group(function () {
    Route::get('/', [PageController::class, 'apartments'])->name('index');
    Route::get('/standard', [PageController::class, 'standard'])->name('standard');
    Route::get('/studio', [PageController::class, 'studio'])->name('studio');
    Route::get('/1_sypialnia', [PageController::class, 'one_bedroom'])->name('one_bedroom');
});

Route::get('/atrakcje', [PageController::class, 'attractions'])->name('attractions');
