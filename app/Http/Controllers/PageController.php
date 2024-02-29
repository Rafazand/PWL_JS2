<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //index
    public function index() {
        return 'Selamat Datang';
    }

    //about
    public function about() {
        return 'Muhammad Nurfauzi Ikhsan 2241270076';
    }

    //articles
    public function articles($id) {
        return 'Halaman artikel dengan ID '.$id;
    }
}
