<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\AdminPostCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminDashboardController::class, 'show'])->name('admin');
Route::get('/post/category', [AdminPostCategoryController::class, 'show'])->name('admin.post.category');
