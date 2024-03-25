<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //function yang pertama kali dibuka
    public function home()
    {
        return view('home'); //menampilkan halaman home
    }
}
