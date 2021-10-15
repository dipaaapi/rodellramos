<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
