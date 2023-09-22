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
                        <a href="{{ route('vr') }}" class="nav-item nav-link" id="virtualreality"><i>Augmented
                            Reality</i></a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        @yield('content')

        {{-- Icon Start --}}
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
        <div id="whatsapp-float" class="social-icon">
            <a href="https://wa.me/62895341020714" target="_blank">
                <i class="fab fa-whatsapp"></i><span><small>WhatsApp</small></span>
            </a>
        </div>

        <div id="instagram-float" class="social-icon">
            <a href="https://www.instagram.com/bencatala.official/" target="_blank">
                <i class="fab fa-instagram"></i><span><small>Instagram</small></span>
            </a>
        </div>

        <div id="tiktok-float" class="social-icon">
            <a href="https://www.tiktok.com/@bencatala.official?_t=8fd3cyrca7b&_r=1" target="_blank">
                <i class="fab fa-tiktok"></i><span><small>TikTok</small></span>
            </a>
        </div> --}}
        {{-- Icon End --}}

        <!-- Load font awesome icons -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- The social media icon bar -->
        <div class="icon-bar">
            <a href="#" class="twitter"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" class="google"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="linkedin"><i class="fa-brands fa-tiktok"></i></a>
        </div>


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
    {{-- <style>
        /* Common styles for all icons */
        .social-icon {
            width: 60px; /* Adjust the width as needed */
            height: 60px; /* Adjust the height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff; /* Common text color */
            border-radius: 0; /* Make them rectangular */
            box-shadow: -1px 0px 35px -7px rgba(158, 158, 158, 1);
            z-index: 10;
            transition: all 0.5s ease-in-out;
            cursor: pointer;
            position: fixed;
        }

        .social-icon a {
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .social-icon i {
            font-size: 24px; /* Adjust the font size as needed */
            transform: rotate(0deg);
            transition: all 0.5s ease-in-out;
        }

        /* WhatsApp icon */
        #whatsapp-float {
            background-color: #25d366; /* Box color */
            bottom: 20%;
            left: 0;
        }

        #whatsapp-float:hover {
            background-color: #128C7E; /* Change background color on hover */
            box-shadow: -1px 0px 35px -7px rgba(0, 0, 0, 1);
            transform: translate(10px, 0px);
        }

        #whatsapp-float:hover i {
            transform: rotate(360deg);
        }

        /* Instagram icon */
        #instagram-float {
            background-color: #bf34ff; /* Box color */
            bottom: 30%;
            left: 0;
        }

        #instagram-float:hover {
            background-color: #8E0FC4; /* Change background color on hover */
            box-shadow: -1px 0px 35px -7px rgba(0, 0, 0, 1);
            transform: translate(10px, 0px);
        }

        #instagram-float:hover i {
            transform: rotate(360deg);
        }

        /* TikTok icon */
        #tiktok-float {
            background-color: #000000; /* Box color */
            bottom: 40%;
            left: 0;
        }

        #tiktok-float:hover {
            background-color: #050505; /* Change background color on hover */
            box-shadow: -1px 0px 35px -7px rgba(0, 0, 0, 1);
            transform: translate(10px, 0px);
        }

        #tiktok-float:hover i {
            transform: rotate(360deg);
        }

        /* Media Query for Responsive Design */
        @media screen and (max-width: 768px) {
            .social-icon {
                width: 50px; /* Adjust the width as needed for smaller screens */
                height: 50px; /* Adjust the height as needed for smaller screens */
            }

            .social-icon i {
                font-size: 20px; /* Adjust the font size as needed for smaller screens */
            }

            #whatsapp-float {
                bottom: 10%;
            }

            #instagram-float {
                bottom: 20%;
            }

            #tiktok-float {
                bottom: 30%;
            }
        } --}}
    {{-- </style> --}}

    {{-- New start --}}
    <style>
/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
    position: fixed;
    top: 50%;
    right: 0; /* Pindahkan ikon bar ke kanan */
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
    display: block;
    text-align: center;
    padding: 20px;
    transition: all 0.3s ease;
    color: white;
    font-size: 29px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
    background-color: #fde41b;
}

.twitter {
    background: #25d366;
    color: white;
}

.google {
    background: #bf34ff;
    color: white;
}

.linkedin {
    background: rgb(6, 6, 6);
    color: white;
}

    </style>
    {{-- New end --}}

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
