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

    // Bencana
    public function GempaBumi()
    {
        return view('user.GempaBumi');
    }    public function Kekeringan()
    {
        return view('user.Kekeringan');
    }    public function GunungMeletus()
    {
        return view('user.GunungMeletus');
    }    public function Tsunami()
    {
        return view('user.Tsunami');
    }    public function Banjir()
    {
        return view('user.Banjir');
    }    public function TanahLongsor()
    {
        return view('user.TanahLongsor');
    }

    // View hasil blender
    public function vGempa()
    {
        return view('user.vGempa');
    }
    public function vKekeringan()
    {
        return view('user.vKekeringan');
    }
    public function vGunung()
    {
        return view('user.vGunung');
    }
    public function vTsunami()
    {
        return view('user.vTsunami');
    }
    public function vBanjir()
    {
        return view('user.vBanjir');
    }
    public function vLongsor()
    {
        return view('user.vLongsor');
    }

}
