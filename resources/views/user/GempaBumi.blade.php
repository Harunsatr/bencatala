@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Gempa Bumi</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('GempaBumi') }}">Gempa Bumi</a>
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
                            <img class="img-fluid" src="{{ asset('landpage/img/gempabumi.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="display-5 animated fadeIn mb-3">Gempa Bumi</h1>
                                <p class="nengah">
                                    Gempa bumi adalah bencana
                                    alam yang terjadi ketika permukaan bumi
                                    bergetar akibat pergeseran atau patahan lempeng di dalam bumi.
                                    Getaran gempa bumi dapat menyebabkan pergerakan tanah yang dapat
                                    merusak bangunan, infrastruktur, dan bahkan menimbulkan bahaya bagi
                                    kehidupan manusia. Gempa bumi dapat memiliki berbagai skala,
                                    yang diukur dengan menggunakan skala kekuatan gempa. Semakin tinggi skala kekuatan gempa,
                                    semakin besar dampak yang mungkin terjadi. Selain itu, gempa bumi sering kali disertai oleh
                                    apa yang disebut sebagai <i>aftershocks</i>, yaitu gempa-gempa kecil yang terjadi setelah gempa utama.
                                    Ini dapat meningkatkan risiko kerusakan lebih lanjut pada struktur yang sudah lemah akibat gempa sebelumnya.
                                    <a href="https://bmkg.go.id/"> Lihat berita.
                                </p>
                            </div>
                            <a href="{{ route('vGempa') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
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
