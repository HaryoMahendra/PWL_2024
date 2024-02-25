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


Route::get('/hello', function () {
 return 'Hello World';
});


Route::get('/world', function () {
    return 'World';
});

Route::get('/Selamat_Datang', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 2141762037 <br> Nama : Haryo Mahendra Jati';
});

Route::get('/user/{name}', function ($name) {
    return 'Haryo Mahendra Jati '.$name;
});

Route::get('/posts/{post}/comments/{comment}', 
    function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/posts/{post}/articles/{id}', 
    function ($postId, $id) {
    return 'Pos ke-'.$postId." <br> Halaman Artikel dengan ID: ".$id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Haryo Mahendra Jati '.$name;
});

use App\Http\Controllers\WelcomeController;
Route::get('/hello', [WelcomeController::class, 'hello']);

use App\Http\Controllers\PageController;
Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index']);

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'about']);

use App\Http\Controllers\ArticleController;
Route::get('/articles/{id}', [ArticleController::class, 'articles']);


use App\Http\Controllers\PhotoController;
//Route::resource('photos', PhotoController::class);
//Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);
   