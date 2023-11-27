@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Kekeringan</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('Kekeringan') }}">Kekeringan</a>
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
                            <img class="img-fluid" src="{{ asset('landpage/img/kekeringan.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="display-5 animated fadeIn mb-3">Kekeringan</h1>
                                <p class="nengah">
                                    Kekeringan adalah ketersediaan air yang jauh di bawah kebutuhan air, baik untuk kebutuhan hidup, pertanian, kegiatan ekonomi, dan lingkungan.
                                <br>
                                Klasifikasi kekeringan
                                <br>
                                1. Kekeringan alamial :
                                <br> (Kekeringan meteorologis, dikarenakan curah hujan yang kurang. Kekeringan hidrologis, kekurangan pasokan air permukaan dan air tanah. Kekeringan pertanian, kekurangan kandungan air dalam tanah sehingga tidak mampu memenuhi kebutuhan tanaman tertentu pada periode tertentu pada wilayah yang luas
                                Kekeringan social ekonomi)
                                <br>
                                2. Kekeringan antripogenik :
                                <br>
                                (Kebutuhan air lebih besar dari pasokan yang direncanakan. Kerusakan kawasan tangkapan air, sumber air, akibat perbuatan manusia).
                                    {{-- <a href="https://bmkg.go.id/"> Lihat berita --}}
                                </p>
                            </div>
                            <a href="{{ route('vKekeringan') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
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
