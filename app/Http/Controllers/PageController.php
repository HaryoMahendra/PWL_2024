<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function articles($id) {
        return "Halam Artikel Dengan ID ".$id;
    }
    public function about() {
        return ('Nama : Haryo Mahendra Jati <br> NIM : 2141762037');
    }
    public function index() {
        return ('Selamat Datang');
    }
}

