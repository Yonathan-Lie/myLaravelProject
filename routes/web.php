<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'Index'])->name('welcome');
Route::get('/pagetwo',[HomeController::class, 'pagetwo'])->name('pagetwo');
