<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperkritikController;

// Page Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/superkritik', [SuperkritikController::class, 'index'])->name('superkritik');
