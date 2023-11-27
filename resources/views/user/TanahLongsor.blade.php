@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Tanah Longsor</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('TanahLongsor') }}">Tanah Longsor</a>
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
                            <img class="img-fluid" src="{{ asset('landpage/img/TanahLongsor.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="display-5 animated fadeIn mb-3">Tanah Longsor</h1>
                                <p class="nengah" id="longsor-description-short">
                                    Tanah longsor atau gerakan tanah: gerakan massa tanah atau batuan, ataupun percampuran keduanya, yang menuruni atau keluar lereng akibat terganggunya kestabilan tanah atau batuan penyusun lereng (Badan Nasional Penanggulangan Bencana).
                                    <br>
                                    <a href="#" onclick="toggleLongsorDescription()">Baca Selengkapnya</a>
                                </p>
                                <p class="nengah" id="longsor-description-full" style="display: none;">
                                    Tanah longsor atau gerakan tanah: gerakan massa tanah atau batuan, ataupun percampuran keduanya, yang menuruni atau keluar lereng akibat terganggunya kestabilan tanah atau batuan penyusun lereng (Badan Nasional Penanggulangan Bencana).
                                    <br> Ciri-ciri:
                                    <br> Setelah hujan biasanya terjadi muncul beberapa retakan sejajar dengan arah tebing di lereng, mata air baru muncul secara tiba-tiba, tebing yang rapuh mengakibatkan banyak kerikil berjatuhan, jika di musim hujan terdapat genangan air, maka menjelang bencana longsor air akan menghilang seketika, bagian tanah mulai runtuh dalam jumlah yang amat besar
                                    , beberapa pohon dan tiang listrik mulai agak miring, halaman rumah ambles ke dalam tanah secara tiba-tiba.
                                    <br>
                                    <a href="#" onclick="toggleLongsorDescription()">Tutup</a>
                                    {{-- <a href="https://bmkg.go.id/"> Lihat berita.</a> --}}
                                </p>
                            </div>
                            <a href="{{ route('vLongsor') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
                                &nbsp;<i class="nengah"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
    <script>
        function toggleLongsorDescription() {
            var shortDescription = document.getElementById("longsor-description-short");
            var fullDescription = document.getElementById("longsor-description-full");

            if (shortDescription.style.display === "none") {
                shortDescription.style.display = "block";
                fullDescription.style.display = "none";
            } else {
                shortDescription.style.display = "none";
                fullDescription.style.display = "block";
            }
        }
    </script>
@stop
