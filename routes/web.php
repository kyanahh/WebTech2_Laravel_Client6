<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ActivityController::class, 'index'])->name('landing');
Route::get('about', [ActivityController::class, 'about'])->name('abawt');

