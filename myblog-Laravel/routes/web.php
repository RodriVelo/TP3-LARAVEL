<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/category', function () {
    return view('category.index');
});

Route::get('/category/show/{id}', function ($id) {
    return view('category.show', compact('id'));
});

Route::get('/category/create', function () {
    return view('category.create');
});

Route::get('/category/edit/{id}', function ($id) {
    return view('category.edit', compact('id'));
});