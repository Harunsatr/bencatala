<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bencatala Playmat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('landpage/img/bencatala_logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landpage/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landpage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landpage/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landpage/css/style.css') }}" rel="stylesheet">

    {{-- CSS code --}}
    <!-- Add this CSS in the <head> section of your HTML -->
    <style>
        .carousel-inner img {
            max-width: 1000px;
            max-height: 1000px;
            width: auto;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('landpage/img/bencatala_logo.png') }}" alt="Icon"
                        style="width: 80px; height: 80px;">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link" id="beranda">Beranda</a>
                        <a href="{{ route('tentangkami') }}" class="nav-item nav-link" id="tentangkami">Tentang Kami</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                id="produkMenu">Produk</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('infoproduk') }}" class="dropdown-item" id="infoproduk">Info
                                    produk</a>
                                <a href="{{ route('belanjasekarang') }}" class="dropdown-item"
                                    id="belanjasekarang">Belanja sekarang</a>
                            </div>
                        </div>
                        <a href="{{ route('vr') }}" class="nav-item nav-link" id="virtualreality">Augmented Reality</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        @yield('content')

        {{-- Icon Start --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
        <div id="social-float">

            <div class="insta-float">
                <a href="" target="_blank">
                    <i class="fab fa-instagram"></i><span><small>Instagram</small></span>
                </a>
            </div>

            <div class="coba-float">
                <a href="" target="_blank">
                    <i class="fab fa-whatsapp"></i><span><small>WhatsApp</small></span>
                </a>
            </div>

            <div class="njajal-float">
                <a href="" target="_blank">
                    <i class="fab fa-tiktok"></i><span><small>TikTok</small></span>
                </a>
            </div>

        </div>
        {{-- Icon End --}}


        <!-- Footer Start -->
        <div class="container-fluid bg-pooter footer pt-3 mt-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <p class="footer-text"> &copy; <span class="black-text">2023 Bencatala Playmat</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landpage/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landpage/js/main.js') }}"></script>
    <script src="{{ asset('landpage/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".breadcrumb-clickable").click(function() {
                // Remove active class from all breadcrumb items
                $(".breadcrumb-clickable").removeClass("active");

                // Add active class to the clicked breadcrumb item
                $(this).addClass("active");
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Fungsi untuk mengatur menu yang aktif berdasarkan URL
            function setActiveMenu() {
                var path = window.location.pathname;

                // Hapus kelas 'active' dari semua menu
                $('.nav-item.nav-link').removeClass('active');

                // Tambahkan kelas 'active' ke menu yang sesuai dengan URL saat ini
                if (path === '/') {
                    $('#beranda').addClass('active');
                } else if (path === '/tentangkami') {
                    $('#tentangkami').addClass('active');
                } else if (path === '/infoproduk' || path === '/belanjasekarang') {
                    // Set menu "Produk" menjadi aktif jika submenu "Info produk" atau "Belanja sekarang" dipilih
                    $('#produkMenu').addClass('active');
                } else if (path === '/hubungi') {
                    $('#hubungi').addClass('active');
                } else if (path === '/vr') {
                    $('#virtualreality').addClass('active');
                }
                // Tambahkan kode ini untuk setiap menu lainnya
            }

            // Panggil fungsi saat halaman dimuat
            setActiveMenu();
        });
    </script>

    {{-- Icon --}}
    <style>

        #social-float {
            position: fixed;
            padding: 24px 10px;
            bottom: 60%;
        }

        .coba-float {
            box-shadow: -1px 0px 35px -7px rgba(158, 158, 158, 1);
            position: fixed;
            transform: translate(135px, 0px);
            width: 180px;
            right: 0;
            overflow: hidden;
            background-color: #25d366;
            color: #FFF;
            border-radius: 2px 0 0 2px;
            z-index: 10;
            transition: all 0.5s ease-in-out;
            vertical-align: middle;
        }

        .coba-float a span {
            color: white;
            font-size: 18px;
            font-family: "Lato", sans-serif;
            padding-top: 8px;
            padding-bottom: 10px;
            position: absolute;
            line-height: 180%;
            font-weight: bolder;
        }

        .coba-float i {
            font-size: 30px;
            color: white;
            line-height: 30px;
            padding: 10px 20px 10px 10px;
            transform: rotate(0deg);
            transition: all 0.5s ease-in-out;
            text-align: center;
        }

        .coba-float:hover {
            color: #FFFFFF;
            box-shadow: -1px 0px 35px -7px rgba(0, 0, 0, 1);
            transform: translate(0px, 0px);
        }

        .coba-float:hover i {
            transform: rotate(360deg);

        }

        .insta-float {
            box-shadow: -1px 0px 35px -7px rgba(158, 158, 158, 1);

            position: fixed;
            transform: translate(135px, 60px);
            width: 180px;
            right: 0;
            overflow: hidden;
            background-color: #bf34ff;
            color: #FFF;
            border-radius: 2px 0 0 2px;
            z-index: 10;
            transition: all 0.5s ease-in-out;
            vertical-align: middle;
        }

        .insta-float a span {
            color: white;
            font-size: 18px;
            font-family: "Lato", sans-serif;
            padding-top: 8px;
            padding-bottom: 10px;
            position: absolute;
            line-height: 180%;
            font-weight: bolder;
        }

        .insta-float i {
            font-size: 30px;
            color: white;
            line-height: 30px;
            padding: 10px 20px 10px 10px;
            transform: rotate(0deg);
            transition: all 0.5s ease-in-out;
            text-align: center;
        }

        .insta-float:hover {
            color: #FFFFFF;
            box-shadow: -1px 0px 35px -7px rgba(0, 0, 0, 1);
            transform: translate(0px, 60px);
        }

        .insta-float:hover i {
            transform: rotate(360deg);
        }


        .njajal-float {
            box-shadow: -1px 0px 35px -7px rgba(158, 158, 158, 1);
            position: fixed;
            transform: translate(135px, 0px);
            width: 180px;
            right: 0;
            overflow: hidden;
            background-color: #000000;
            color: #FFF;
            border-radius: 2px 0 0 2px;
            z-index: 10;
            transition: all 0.5s ease-in-out;
            vertical-align: middle;
            bottom: 40%
        }

        .njajal-float a span {
            color: white;
            font-size: 18px;
            font-family: "Lato", sans-serif;
            padding-top: 8px;
            padding-bottom: 10px;
            position: absolute;
            line-height: 180%;
            font-weight: bolder;
        }

        .njajal-float i {
            font-size: 30px;
            color: white;
            line-height: 30px;
            padding: 10px 20px 10px 10px;
            transform: rotate(0deg);
            transition: all 0.5s ease-in-out;
            text-align: center;
        }

        .njajal-float:hover {
            color: #FFFFFF;
            box-shadow: -1px 0px 35px -7px rgba(0, 0, 0, 1);
            transform: translate(0px, 0px);
        }

        .njajal-float:hover i {
            transform: rotate(360deg);

        }
    </style>

    <style>
        .nengah {
            text-align: justify;
            vertical-align: middle;
        }
    </style>
    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch;
        }

        .col-lg-3,
        .col-sm-6 {
            flex-basis: calc(33.33% - 20px);
            /* 3 kolom dalam 1 baris dengan jarak 20px */
            margin: 10px;
            /* Jarak antara kotak */
            transition: transform 0.3s, opacity 0.3s;
        }

        .cat-item {
            display: block;
            background-color: #f8f8f8;
            text-align: center;
            border-radius: 10px;
            padding: 20px;
        }

        .icon {
            margin-bottom: 15px;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        h6 {
            margin: 0;
            font-size: 18px;
        }

        /* Animasi saat di-hover */
        .cat-item:hover {
            transform: translateY(-5px);
        }

        /* Animasi fadeInUp menggunakan Wow.js */
        .wow {
            visibility: hidden;
        }

        /* Susun kotak di atas */
        .row.above {
            order: -1;
        }
    </style>

</body>

</html>
