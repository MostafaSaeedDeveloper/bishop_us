<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\Front\ProjectController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('front.home');
Route::get('/about', [PagesController::class, 'about'])->name('front.about');
Route::get('/services', [PagesController::class, 'services'])->name('front.services');
Route::get('/services/{service}', [PagesController::class, 'serviceShow'])->name('front.services.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('front.projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('front.projects.show');
Route::get('/blog', [PostController::class, 'index'])->name('front.blog.index');
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('front.blog.show');
Route::get('/contact', [PagesController::class, 'contact'])->name('front.contact');

Auth::routes();

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('projects', AdminProjectController::class)->except(['show']);
    Route::resource('posts', AdminPostController::class)->except(['show']);
});

Route::get('/home', fn () => redirect()->route('admin.dashboard'))->middleware('auth')->name('home');
