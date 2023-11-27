@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Info produk</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('tentangkami') }}">Info produk</a>
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
                <h1 class="mb-3 mt-5">Bencatala <i>Playmat</i></h1>
                <p>Dokumentasi kerja sama Bencatala <i>Playmat.</i>
                    <br>
                    <br>
                    <b>Belanja sekarang</b>
                    <br>
                    <a href="https://www.tokopedia.com/bencatala/bencatala-playmat?extParam=ivf%3Dfalse%26src%3Dsearch">
                        <img src="{{ asset('landpage/img/tokped.png') }}" alt="Tokopedia Logo" style="width: 100px; height: auto; cursor: pointer;">
                    </a>
                    <a href="https://shopee.co.id/Bencatala-Playmat-i.1049426353.23750800554?sp_atk=dbdc5546-d3fb-45df-a1a8-4bddf0db2b3b&xptdk=dbdc5546-d3fb-45df-a1a8-4bddf0db2b3b">
                        <img src="{{ asset('landpage/img/shopee.png') }}" alt="Shopee Logo" style="width: 100px; height: auto; cursor: pointer;">
                    </a>
                </p>
            </div>

            <div class="row g-4 above"> 
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('infoproduk') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/anak1.jpg') }}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('infoproduk') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/anak5.jpg') }}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('infoproduk') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/anak6.jpg') }}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('infoproduk') }}">
                        <div class="rounded p-4 img-fluid">
                            <img class="img-fluid" src="{{ asset('landpage/img/anak4.jpg') }}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('infoproduk') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/anak3.jpg') }}" alt="Icon">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('infoproduk') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/anak2.jpg') }}" alt="Icon">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->

    <style>
        .img-fluid {
            width: 100%;
            height: auto;
            max-width: 200px; /* Sesuaikan dengan ukuran yang diinginkan */
        }
    </style>

@stop
