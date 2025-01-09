<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/book/create', [BookController::class, 'create'])->name('book.create');

Route::get('/book/index', [BookController::class, 'index'])->name('book.index');

Route::get('/book/show/{book}', [BookController::class, 'show'])->name('book.show');

Route::get('/platform/index',[PlatformController::class, 'index'])->name('platform.index');

Route::get('/platform/create', [PlatformController::class, 'create'])->name('platform.create');

Route::get('/platform/show/{platform}', [PlatformController::class, 'show'])->name('platform.show');

Route::get('/platform/edit/{platform}', [PlatformController::class, 'edit'])->name('platform.edit');

Route::put('/platform/update/{platform}',[PlatformController::class, 'update'])->name('platform.update');

Route::post('/book/store', [BookController::class, 'store'])->name('book.store');

Route::post('/platform/store', [PlatformController::class, 'store'])->name('platform.store');
