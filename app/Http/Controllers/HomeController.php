<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }
    public function tentangkami()
    {
        return view('user.tentangkami');
    }
    public function belanjasekarang()
    {
        return view('user.belanjasekarang');
    }
    public function produk()
    {
        return view('user.produk');
    }
    public function infoproduk()
    {
        return view('user.infoproduk');
    }
    public function download()
    {
        return view('user.download');
    }
    public function testi()
    {
        return view('user.testi');
    }
    public function ar()
    {
        return view('user.ar');
    }
}
