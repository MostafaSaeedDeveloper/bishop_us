<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('front.home');
Route::view('/about', 'front.about')->name('front.about');
Route::view('/contact', 'front.contact')->name('front.contact');
Route::view('/services', 'front.services.index')->name('front.services.index');
Route::get('/projects', [ProjectsController::class, 'frontIndex'])->name('front.projects.index');
Route::get('/projects/{project:slug}', [ProjectsController::class, 'frontShow'])->name('front.projects.show');
Route::view('/blog', 'front.blog.index')->name('front.blog.index');

Route::redirect('/index.html', '/');
Route::redirect('/about.html', '/about');
Route::redirect('/contact.html', '/contact');
Route::redirect('/service.html', '/services');
Route::redirect('/services.html', '/services');
Route::redirect('/service-details.html', '/services');
Route::redirect('/portfolio.html', '/projects');
Route::redirect('/portfolio-details.html', '/projects');
Route::redirect('/blog.html', '/blog');
Route::redirect('/blog-details.html', '/blog');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProjectsController::class, 'dashboard'])->name('dashboard');

    Route::prefix('/dashboard')->name('admin.')->group(function () {
        Route::resource('projects', ProjectsController::class)->except(['show']);
    });
});

Route::redirect('/home', '/dashboard')->name('home');
