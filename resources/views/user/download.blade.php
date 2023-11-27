
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
                    membawa 6 Bencana sebagai materi mitigasi bencana yang dipelajari. <a href="https://drive.google.com/drive/folders/19X0JzUTKE2NQug5iL0dBzBhzHGxl2BGf?usp=sharing">Download Aplikasi </a>
                </p>
            </div>
            <embed src="{{ asset('landpage/img/E-book Panduan Bencatala Playmat.pdf') }}" type="application/pdf" width="100%" height="600px" />
            <div class="row g-4 above">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('GempaBumi') }}">
                        <div class="rounded p-4">
                            <video class="img-fluid" src="{{ asset('landpage/img/gempabumi.mp4') }}" autoplay loop muted
                                style="max-width: 100%; height: auto;"></video>
                            <h6>Gempa Bumi</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('Kekeringan') }}">
                        <div class="rounded p-4">
                            <video class="img-fluid" src="{{ asset('landpage/img/kekeringan.mkv') }}" autoplay loop muted
                                style="max-width: 100%; height: auto;"></video>
                            <h6>Kekeringan</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('GunungMeletus') }}">
                        <div class="rounded p-4">
                            <video class="img-fluid" src="{{ asset('landpage/img/gunungmeletus.mkv') }}" autoplay loop muted
                                style="max-width: 100%; height: auto;"></video>
                            <h6>Gunung Meletus</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('Tsunami') }}">
                        <div class="rounded p-4">
                            <video class="img-fluid" src="{{ asset('landpage/img/tsunami.mkv') }}" autoplay loop muted
                                style="max-width: 100%; height: auto;"></video>
                            <h6>Tsunami</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('Banjir') }}">
                        <div class="rounded p-4">
                            <video class="img-fluid" src="{{ asset('landpage/img/banjir.mkv') }}" autoplay loop muted
                                style="max-width: 100%; height: auto;"></video>
                            <h6>Banjir</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('TanahLongsor') }}">
                        <div class="rounded p-4">
                            <video class="img-fluid" src="{{ asset('landpage/img/tanahlongsor.mkv') }}" autoplay loop muted
                                style="max-width: 100%; height: auto;"></video>
                            <h6>Tanah Longsor</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->


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
                            <a href="{{ route('ar') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
                                &nbsp;<i class="nengah"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

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
                            <a href="{{ route('ar') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
                                &nbsp;<i class="nengah"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

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
                                <a href="{{ route('ar') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
                                    &nbsp;<i class="nengah"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
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
                            <a href="{{ route('ar') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
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
        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid" src="{{ asset('landpage/img/banjir.jpg') }}" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="display-5 animated fadeIn mb-3">Banjir</h1>
                                    <p class="nengah" id="banjir-description-short">
                                        Banjir adalah adalah peristiwa atau keadaan dimana terendamnya suatu daerah atau daratan karena volume air yang meningkat.
                                        <br> Jenis - jenis banjir yang perlu kita ketahui :
                                        <br> 1. Banjir Bandang (Banjir ini dapat mengangkut air dan juga lumpur, biasanya banjir ini akan membawa pohon-pohon ataupun bebatuan berukuran besar sehingga memberikan dampak kerusakan yang cukup parah. Tahu nggak apa yang menyebabkan hal ini terjadi ? banjir ini terjadi akibat gundulnya hutan).
                                        <br> 2. Banjir Air (Banjir yang terjadi akibat meluapnya air sungai, danau atau selokan. Nahh kalo banjir air sering terjadi saat hujan deras dalam kurun waktu yang lama, sehingga air tidak tertampung dan meluap).
                                        <br>
                                        <a href="#" onclick="toggleBanjirDescription()">Baca Selengkapnya</a>
                                    </p>
                                    <p class="nengah" id="banjir-description-full" style="display: none;">
                                        Banjir adalah adalah peristiwa atau keadaan dimana terendamnya suatu daerah atau daratan karena volume air yang meningkat.
                                        <br> Jenis - jenis banjir yang perlu kita ketahui :
                                        <br> 1. Banjir Bandang (Banjir ini dapat mengangkut air dan juga lumpur, biasanya banjir ini akan membawa pohon-pohon ataupun bebatuan berukuran besar sehingga memberikan dampak kerusakan yang cukup parah. Tahu nggak apa yang menyebabkan hal ini terjadi ? banjir ini terjadi akibat gundulnya hutan).
                                        <br> 2. Banjir Air (Banjir yang terjadi akibat meluapnya air sungai, danau atau selokan. Nahh kalo banjir air sering terjadi saat hujan deras dalam kurun waktu yang lama, sehingga air tidak tertampung dan meluap).
                                        <br> 3. Banjir lumpur (Banjir ini mirip dengan banjir bandang, namun banjir lumpur bearsal dari dalam bumi yang keluar menggenangi daratan. Lumpur ini mengandung gas yang sangat berbahaya).
                                        <br> 4. Banjir Rob atau banjir laut air pasang (Banjir Rob terjadi akibat air laut yang pasang, biasanya akan menerjang pemukiman di wilayah pesisir pantai).
                                        <br>
                                        <a href="#" onclick="toggleBanjirDescription()">Tutup</a>
                                        {{-- <a href="https://bmkg.go.id/"> Lihat berita.</a> --}}
                                    </p>
                                </div>
                                <a href="{{ route('ar') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
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
            function toggleBanjirDescription() {
                var shortDescription = document.getElementById("banjir-description-short");
                var fullDescription = document.getElementById("banjir-description-full");

                if (shortDescription.style.display === "none") {
                    shortDescription.style.display = "block";
                    fullDescription.style.display = "none";
                } else {
                    shortDescription.style.display = "none";
                    fullDescription.style.display = "block";
                }
            }
        </script>
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
                            <a href="{{ route('ar') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
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
