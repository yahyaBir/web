<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperkritikController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Page Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/superkritik', [SuperkritikController::class, 'index'])->name('superkritik');
Route::get('/applications', [ApplicationController::class, 'index'])->name('applications');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
