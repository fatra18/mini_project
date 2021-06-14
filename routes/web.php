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

Route::get('/', function(){
    return view('index');
});

Route::get('/user', function () {
    return view('users.index');
});
Route::get('/user/edit', function () {
    return view('users.edit');
});
Route::get('/user/create', function () {
    return view('users.create');
});

Route::get('/category', function () {
    return view('category.index');
});
Route::get('/category/create', function () {
    return view('category.create');
});
Route::get('/category/edit', function () {
    return view('category.edit');
});


Route::get('/article', function () {
    return view('articles.index');
});


Route::get('/article/edit', function () {
    return view('articles.edit');
});


Route::get('/article/create', function () {
    return view('articles.create');
});









    
