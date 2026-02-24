<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('Dashboard');
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function daftarmenu()
    {
        return view('daftarmenu');
    }

    public function paket()
    {
        return view('paket');
    }

    public function reservasi()
    {
        return view('reservasi');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function login()
    {
        return view('login');
    }
}