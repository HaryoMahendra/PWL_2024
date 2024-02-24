<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function articles($id) {
        $message = "Halaman Artikel dengan Id $id";
        return view('articles', ['message' => $message]);
    }
}
