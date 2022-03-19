<?php

use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::group(['middleware'=> ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/chat', [PageController::class, 'chat'])->name('chat');
});

