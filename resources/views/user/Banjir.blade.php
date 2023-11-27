@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Banjir</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('Banjir') }}">Banjir</a>
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
                            <a href="{{ route('vBanjir') }}" class="btn btn-primary py-2 px-3 me-2">Lihat simulasi
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
@stop
