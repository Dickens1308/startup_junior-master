<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//routes pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/pages/abouts', [PageController::class, 'about'])->name('abouts');
Route::get('/pages/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/pages/blogs', [PageController::class, 'blog'])->name('events');


Auth::routes();

//admin routes
Route::prefix('admin/')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/pages/mentors', [AdminController::class, 'mentors'])->name('mentors');
    Route::Post('/', [AdminController::class, 'logout']);
});

Route::prefix('mentor/')->middleware(['auth', 'role:mentor'])->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('mentor.home');
});
