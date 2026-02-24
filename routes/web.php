<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('front.home');
Route::view('/about', 'front.about')->name('front.about');
Route::view('/contact', 'front.contact')->name('front.contact');
Route::view('/services', 'front.services.index')->name('front.services.index');
Route::view('/projects', 'front.projects.index')->name('front.projects.index');
Route::view('/blog', 'front.blog.index')->name('front.blog.index');


// Legacy template URLs
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
