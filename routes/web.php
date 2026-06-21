<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::view('/certifications', 'pages.certifications');
Route::view('/manufacturing', 'pages.manufacturing');

Route::get('/products/{category}', [ProductController::class, 'category']);
Route::get('/products/{category}/{slug}', [ProductController::class, 'show']);
