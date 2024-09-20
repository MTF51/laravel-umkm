<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('icons/ic-logo.ico') }}">
    <title>Paguyuban Karangsari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/magnific.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <style>
        #hero {
            position: relative;
            height: 600px;
            overflow: hidden;
            /* Menghindari konten meluap */
        }

        .background-blur {
            background-image: url("{{ asset('images/pakusari.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            filter: blur(10px);
            /* Efek blur pada background */
            z-index: 1;
            /* Tetap di belakang konten */
        }

        .hero-title {
            position: relative;
            z-index: 2;
            /* Konten berada di atas background */
            padding-top: 200px;
            text-align: center;
            color: white;
            /* Warna teks agar kontras dengan background */
        }


        .navbar {
            padding: 1.5rem 1.5rem;
            /* Menambah tinggi navbar */
            font-size: 1.5rem;
            /* Memperbesar ukuran font */
            background-color: rgba(255, 255, 255, 0.8);
            /* Memberikan latar belakang semi-transparan */
            transition: background-color 0.3s, backdrop-filter 0.3s;
            /* Menambahkan transisi */
        }

        .scroll-nav-active {
            backdrop-filter: blur(10px);
            /* Efek blur */
            background-color: rgba(255, 255, 255, 0.9);
            /* Menyesuaikan warna latar belakang saat scroll */
        }

        .navbar-brand img {
            width: 85px;
            /* Memperbesar logo */
            height: 85px;
        }

        .navbar-nav .nav-item .nav-link {
            padding: 0.75rem 1.25rem;
            /* Menambah jarak antar item */
        }

        .navbar-toggler {
            padding: 0.75rem;
            /* Memperbesar tombol toggler */
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }}">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('umkm.index') }}">Daftar UMKM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('admin.index') }}">Admin Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn font-weight-bold" href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content -->
    <div class="container py-5">
        <div class="container mt-5 py-5">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <section id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5 class="fw-bold">Pakusari</h5>
                    <p>Sebuah paguyuban UMKM yang ada di Kelurahan Karangsari, Kendal, Jawa Tengah.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="fw-bold">Kontak</h5>
                    <p>JL Gajahmada, Karangsari, Srendeng, Karang Sari, Kec. Kendal, Kabupaten Kendal, Jawa Tengah 51319
                    </p>
                    <p>Phone:</p>
                </div>
            </div>
        </div>
    </section>
    <section id="footer" class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div>
                    Paguyuban UMKM Karangsari
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat dan Ketentuan</p>
                    <p>
                        <a href="/kebijakan" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer End -->

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/magnific.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inisialisasi Summernote
            $('#summernote').summernote({
                height: 200,
            });

            // Inisialisasi Magnific Popup
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });

            // Inisialisasi carousel dengan auto-slide
            $('#testimonialCarousel').carousel({
                interval: 2000 // Mengatur waktu transisi otomatis setiap 5 detik
            });
        });

        // Menambahkan efek scroll pada navbar
        const nav = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                nav.classList.add("scroll-nav-active");
            } else {
                nav.classList.remove("scroll-nav-active");
            }
        };

        // Inisialisasi AOS (Animation on Scroll)
        AOS.init();

        $('.carousel').carousel({
            interval: 3000, // Ganti dengan waktu yang Anda inginkan dalam milidetik
            ride: 'carousel'
        });
    </script>



    {{-- <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });

        const nav = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                nav.classList.add("scroll-nav-active");
            } else {
                nav.classList.remove("scroll-nav-active");
            }
        };

        AOS.init();

        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });
    </script> --}}
    <!-- Scripts End -->

</body>

</html>
