<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('books', BookController::class);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/members', [MemberController::class, 'index'])->name('members.index');