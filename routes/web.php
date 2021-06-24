<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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

Route::get('/admin', function(){
    return view('index');
});

Route::get('/', [GuestController::class,'home'])->name('home');
Route::get('/search', [GuestController::class,'search'])->name('search');
Route::get('home/detail/{id}', [GuestController::class,'show'])->name('detail.page');


Route::prefix('admin')->group(function(){

Route::get('/dashboard', [DashboardController::class,'index'] );

Route::get('/users',[UserController::class,'index'])->name('users.index');

Route::get('/users/create',[UserController::class,'create'])->name('user.create');

Route::post('/users/create',[UserController::class,'store'])->name('user.store');

Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('users.edit');

Route::get('/articles/show/{id}',[UserController::class,'show'])->name('users.show');

Route::put('/users/update/{id}',[UserController::class,'update'])->name('users.update');

Route::delete('/users/delete/{id}',[UserController::class,'destroy'])->name('users.delete');


Route::get('/category',[CategoryController::class,'index'])->name('category.index');

Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');

Route::post('/category/create',[CategoryController::class,'store'])->name('category.store');

Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');

Route::delete('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');


Route::get('/articles',[ArticleController::class,'index'])->name('articles.index');

Route::get('/articles/create',[ArticleController::class,'create'])->name('articles.create');

Route::post('/articles/store',[ArticleController::class,'store'])->name('articles.store');

Route::get('/articles/show/{id}',[ArticleController::class,'show'])->name('articles.show');

Route::get('/articles/edit/{id}',[ArticleController::class,'edit'])->name('articles.edit');

Route::put('/articles/update/{id}',[ArticleController::class,'update'])->name('articles.update');

Route::delete('/articles/delete/{id}',[ArticleController::class,'destroy'])->name('articles.delete');
});




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


    
