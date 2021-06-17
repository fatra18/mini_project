<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use voku\helper\ASCII;

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

// Route::get('/', function(){
//     return view('index');
// });


// Route::get('/category', function () {
//     return view('category.index');
// });
// Route::get('/category/create', function () {
//     return view('category.create');
// });
// Route::get('/category/edit', function () {
//     return view('category.edit');
// });


// Route::get('/article', function () {
//     return view('articles.index');
// });


// Route::get('/article/edit', function () {
//     return view('articles.edit');
// });


// Route::get('/article/create', function () {
//     return view('articles.create');
// });


Route::get('/users',[UserController::class,'index'])->name('user.index');

Route::get('/users/create',[UserController::class,'create'])->name('user.create');

Route::post('/users/create',[UserController::class,'store'])->name('user.store');

Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('users.edit');

Route::put('/users/update/{id}',[UserController::class,'update'])->name('users.update');

Route::delete('/users/delete/{id}',[UserController::class,'destroy'])->name('users.delete');


Route::get('/category',[CategoryController::class,'index'])->name('category.index');

Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');

Route::post('/category/create',[CategoryController::class,'store'])->name('category.store');

Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');

Route::delete('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');


Route::get('/article',[ArticleController::class,'index'])->name('article.index');

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');

Route::post('/article/create',[ArticleController::class,'store'])->name('article.store');

Route::get('/article/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');

Route::put('/article/update/{id}',[ArticleController::class,'update'])->name('article.update');

Route::delete('/article/delete/{id}',[ArticleController::class,'destroy'])->name('article.delete');




    
