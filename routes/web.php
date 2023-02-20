<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/users/{token}', [SiteController::class, 'show'])->name('site.show');
Route::post('users', [UserController::class, 'store'])->name('users.store');
