@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Gunung Meletus</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('GempaBumi') }}">Gunung Meletus</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="{{ asset('landpage/img/3-3.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Call to Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded p-3">
                <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{ asset('landpage/img/gunungmeletus.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="display-5 animated fadeIn mb-3">Gunung Meletus</h1>
                                <p class="nengah">
                                    Erupsi gunung api merupakan peristiwa ketika gunung melepaskan material yang ada di dalamnya seperti abu vulkanik, gas dan awan panas.
                                    Jenis gunung api.
                                    <br>
                                    - Stratovolcano ditandai dengan ujung gunung yang mengerucut tajam dan tinggi.
                                    <br> (Contoh : G.Merapi, G. Rinjani, dan G. Agung).
                                    <br>
                                    - Perisai dicirikan dengan bentuk yang lebih datar dan luas dibandingkan strato.
                                    <br> (Contoh : G.Tambora).
                                    <br>
                                    - Maar dicirikan dengan lubang besar pada puncak yang disebut kawah gunung.
                                    <br> (Contoh :  G.Dieng, G. Gamalama, G.Lamongan).
                                    <br> Tahukah kamu? salah satu material dari gunung api yaitu abu vulkanik dapat mempengaruhi kualitas air, jika hal ini dikonsumsi akan berakibat pada kerusakan dinding usus serta berkurangnya fungsi paru-paru pada manusia.
                                    {{-- <a href="https://bmkg.go.id/"> Lihat berita --}}
                                </p>
                            </div>
                            <a href="{{ route('vGunung') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
                                &nbsp;<i class="nengah"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
@stop
