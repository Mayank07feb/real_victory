<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/client', [HomeController::class, 'client'])->name('client');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/review', [HomeController::class, 'review'])->name('review');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/skill', [HomeController::class, 'skill'])->name('skill');
Route::get('/team', [HomeController::class, 'team'])->name('team');