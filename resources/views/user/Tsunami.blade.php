@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Tsunami</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('Tsunami') }}">Tsunami</a>
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
                            <img class="img-fluid" src="{{ asset('landpage/img/tsunami.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="display-5 animated fadeIn mb-3">Tsunami</h1>
                                <p class="nengah" id="tsunami-description-short">
                                    Tsunami merupakan perpindahan badan air laut secara vertikal secara tiba-tiba. Gelombang tsunami dapat merambat ke segala arah dengan kecepatan 500–1000 km per jam (setara dengan kecepatan pesawat jet). Penyebab tsunami dipengaruhi oleh beberapa faktor seperti letusan gunung api, gempa bumi, longsor bawah laut, serta meteor yang jatuh ke bumi.
                                    <br>
                                    <a href="#" onclick="toggleTsunamiDescription()">Baca Selengkapnya</a>
                                </p>
                                <p class="nengah" id="tsunami-description-full" style="display: none;">
                                    1. Letusan gunung api dasar laut (Meletusnya gunung api yang berada atau dekat dengan laut menghasilkan getaran yang kuat sehingga mengguncang kolom air dan membentuk ombak tsunami yang tinggi. Selain itu, aliran piroklastik secara cepat dari lereng gunung pada saat letusan gunung berapi dapat mendorong air laut dan menghasilkan gelombang tsunami yang kuat)
                                    <br> 2. Gempa dasar laut (Ketika terjadi tumbukan dua lempeng di dasar laut secara vertikal (menghasilkan pola sesar naik dan turun), permukaan air laut di atasnya akan merambatkan gelombang ke segala arah, termasuk ke arah daratan yang menyebabkan tsunami).
                                    <br> 3. Longsor bawah laut (Struktur di bawah laut seperti tebing dan bukit-bukit di daratan juga dapat mengalami kelongsoran material, loh. Saat getaran longsoran nya kuat, maka permukaan air laut akan terombang ambing dan menghasilkan gelombang dengan kekuatan yang sangat besar sehingga terjadilah tsunami di daratan).
                                    <br> 4. Hantaman meteor (Meski belum pernah terjadi, hantaman meteor ke permukaan laut diperkirakan dapat menimbulkan tsunami yang kuat karena bertambahnya material laut secara tiba- tiba. Hantaman meteor ini dapat diibaratkan seperti bola atau benda berat  menghantam air yang berada di sebuah kolam, sehingga terjadi luapan air yang sangat besar).
                                    <br>
                                    <a href="#" onclick="toggleTsunamiDescription()">Tutup</a>
                                </p>
                            </div>
                            <a href="{{ route('vTsunami') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
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
        function toggleTsunamiDescription() {
            var shortDescription = document.getElementById("tsunami-description-short");
            var fullDescription = document.getElementById("tsunami-description-full");

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
