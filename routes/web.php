<?php

use App\Http\Controllers as Web;
use Illuminate\Support\Facades\Route;

Route::get('/', [Web\SiteController::class, 'index'])->name('site.index');
Route::get('/users/{slug}', [Web\SiteController::class, 'show'])->name('site.show');
Route::post('/users/{slug}', [Web\SiteController::class, 'show'])->name('site.play');
Route::post('users', [Web\UserController::class, 'store'])->name('users.store');
Route::resource('links', Web\LinkController::class);
