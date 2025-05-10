<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    // menampilkan halaman utama
    public function index()
    {
        return view('welcome');
    }

    // menampilkan halaman home
    public function home()
    {
        $nama = 'John Doe';
        return view('home', compact('nama'));
    }
        
    // menampilkan halaman profile
    public function profile()
    {
        return view('profile');
    }
}
