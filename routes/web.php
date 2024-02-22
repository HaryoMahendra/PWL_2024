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

Route::get('/posts/{post}/articles/{id} ', 
    function ($postId, $id) {
    return 'Pos ke-'.$postId." <br> Halaman Artikel dengan ID: ".$id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Haryo Mahendra Jati '.$name;
});

