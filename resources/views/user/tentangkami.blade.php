@extends('layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Tentang Kami</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-muted">Beranda</a>
                        </li>
                        <li class="breadcrumb-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('tentangkami') }}">Tentang Kami</a>
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

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="">
                        <video class="video-fluid w-100" autoplay loop muted>
                            <source src="{{ asset('landpage/img/ngasalae.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 animated fadeIn mb-4">Bencatala <span class="text-primary"><i>Playmat</i></span></h1>
                    <p class="mb-4 nengah">
                        Bencatala <i>Playmat</i> menyajikan inovasi produk dengan prinsip bermain
                        sambil belajar melalui video, gambar, dan audio tentang mitigasi bencana serta
                        cara-cara merawat alam sekitar. Produk ini sangat diperlukan untuk menambah
                        pengetahuan baru bagi anak usia dini. Teknologi serta desain yang menarik menjadi
                        daya dukung dalam pembuatan produk.
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i><i>Augmented Reality</i></p>
                    <p><i class="fa fa-check text-primary me-3"></i>Buku panduan</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Konten menarik</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aman bagi anak-anak</p>
                    <a href="{{ route('tentangkami') }}" class="btn btn-primary py-2 px-3 me-2">Selengkapnya &nbsp;<i
                            class="fa fa-chevron-right nengah"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('vr') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Gempa Bumi.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Gempa Bumi</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('vr') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Kekeringan.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Kekeringan</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('vr') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Gunung Meletus.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Gunung Meletus</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('vr') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Tsunami.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Tsunami</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('vr') }}">
                        <div class="rounded p-4">
                            <img class="img-fluid" src="{{ asset('landpage/img/Banjir.png') }}" alt="Icon"
                                style="max-width: 100px; height: auto;">
                            <h6>Banjir</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('vr') }}">
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

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Fitur</h1>
                <p>
                    Bencatala <i>Playmat</i> juga dilengkapi segudang fitur yang dapat membuat anak merasa nyaman dan aman
                    serta dapat menunjang kreativitasnya.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4 nengah">
                        <p>
                            <i>Augmented Reality</i> (AR) merupakan teknologi yang memungkinkan
                            untuk berinteraksi dengan objek imajinasi melalui perangkat elektronik dan seolah-olah
                            merasakan secara langsung (3D).
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('landpage/img/ar.png') }}"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1"><i>Augmented Reality</i></h6>
                                <small>Fitur</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4 nengah">
                        <p>Anak-anak pada umumnya menyukai sesuatu yang sangat menarik. Bencatala <i>playmat</i>
                            memberikan Video edukasi berisikan
                            tentang cara mitigasi bencana diiringi dengan animasi.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('landpage/img/edukasi.jpg') }}"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Video Edukasi</h6>
                                <small>Fitur</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4 nengah">
                        <p>
                            Gaya belajar tentunya mempengaruhi nilai akademis anak. Fitur auditori ini memudahkan anak
                            dalam belajar memperhatikan materi pembelajaran secara asik dan menyenangkan.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('landpage/img/audi.jpeg') }}"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Auditori</h6>
                                <small>Fitur</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4 nengah">
                        <p>
                            Sebagai permulaan ketika ingin mememasuki dunia <i>Augmented Reality</i> (AR), pengguna diminta untuk
                            men-scan barcode yang telah tersedia dibuku panduan ataupun di web Bencatala <i>Playmat</i>.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('landpage/img/scanqr.png') }}"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">QR Code</h6>
                                <small>Fitur</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Hubungi Kami</h1>
            <p>
                Layanan ini tersedia setiap saat ketika Anda ingin mempertanyakan produk kami lebih lanjut.
                Produk kami merupakan barang original dari karya kami.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-light rounded p-3">
                            <div class="anjay align-items-center bg-white rounded p-3"
                                style="border: 1px dashed rgba(0, 185, 142, .3)">
                                <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                                <span class="nengah">Jl. Semarang 5, Malang, Jawa Timur</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="bg-light rounded p-3">
                            <div class="anjay align-items-center bg-white rounded p-3"
                                style="border: 1px dashed rgba(0, 185, 142, .3)">
                                <i class="fas fa-envelope me-2 text-primary"></i>
                                <span class="nengah">bencatala.official@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-light rounded p-3">
                            <div class="anjay align-items-center bg-white rounded p-3"
                                style="border: 1px dashed rgba(0, 185, 142, .3)">
                                <i class="fas fa-phone me-2 text-primary"></i>
                                <span class="nengah">(+62) 895341020714</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.713144607958!2d112.61040189638483!3d-7.954615046234704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788281bdd08839%3A0xc915f268bffa831f!2sUniversitas%20Negeri%20Malang!5e0!3m2!1sen!2sid!4v1694491446200!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4 nengah">
                        Bencatala <i>Playmat</i> dapat menjadi solusi mengenali bencana dan cara mitigasi yang tepat untuk anak
                        usia dini.
                        Wujudkan kreativitas dan kecerdasan anak dalam pengetahuan berbasis teknologi.
                        <a href="#">Pesan sekarang.</a>
                    </p>
                    <form method="POST" action="{{ route('send.message') }}">
                        @csrf
                        <!-- Form fields here -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="umur" id="subject"
                                        placeholder="Subject">
                                    <label for="subject">Umur</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Kritik dan saran</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit"
                                    name="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


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
