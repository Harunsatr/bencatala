@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Unduhan</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('download') ? 'active' : '' }}">
                            <a href="{{ route('download') }}">Unduhan</a>
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

    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3 mt-5">Mitigasi Bencana</h1>
                <p> Bencatala <i>Playmat</i> hadir dengan
                    membawa 6 Bencana sebagai materi mitigasi bencana yang dipelajari.
                </p>
            </div>
            <div class="row g-4 above">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('ar') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Gempa Bumi.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Gempa Bumi</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('ar') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Kekeringan.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Kekeringan</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('ar') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Gunung Meletus.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Gunung Meletus</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('ar') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Tsunami.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Tsunami</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('ar') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Banjir.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Banjir</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('ar') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Tanah Longsor.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Tanah Longsor</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->

    {{-- Script --}}
    <style>
        .anjay {
            justify-content: center;
            /* Mengatur teks di tengah secara horizontal */
            align-items: center;
            /* Mengatur teks di tengah secara vertikal */
            height: 100%;
            /* Mengisi seluruh tinggi kontainer */
        }
    </style>
@stop
