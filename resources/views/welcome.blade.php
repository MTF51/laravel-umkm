@extends('layouts.app')

<section id="hero">
    <div class="container text-center text-white">
        <div class="hero-title" data-aos="fade-up">
            <div class="hero-text">Selamat Datang <br> di Paguyuban UMKM Karangsari</div>
            <h4>Platform Informasi Digital untuk UMKM di Karangsari. </h4>
        </div>
    </div>
</section>

<!-- Tentang PAKUSARI -->
<section class="mt-5">
    <h2 class="text-center">Tentang PAKUSARI</h2>
    <p class="text-center lead">PAKUSARI adalah paguyuban UMKM yang berfokus pada pengembangan dan pemberdayaan UMKM di
        Karangsari. Kami menyediakan platform untuk berbagi informasi, kolaborasi, dan peluang bisnis bagi para pelaku
        usaha kecil dan menengah.</p>
</section>

<!-- Keuntungan Bergabung -->
<section class="mt-5">
    <h2 class="text-center">Keuntungan Bergabung dengan PAKUSARI</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <h4>Akses ke Pasar yang Lebih Luas</h4>
            <p>Dapatkan peluang untuk memasarkan produk Anda ke audiens yang lebih besar melalui platform kami.</p>
        </div>
        <div class="col-md-4">
            <h4>Pendidikan dan Pelatihan</h4>
            <p>Ikuti berbagai pelatihan dan workshop yang akan meningkatkan keterampilan bisnis Anda.</p>
        </div>
        <div class="col-md-4">
            <h4>Jaringan dan Kolaborasi</h4>
            <p>Berkolaborasi dengan UMKM lainnya untuk meningkatkan kekuatan ekonomi lokal bersama.</p>
        </div>
    </div>
</section>

<!-- Testimoni Anggota -->
<section class="mt-5">
    <h2 class="text-center">Kata UMKM</h2>
    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex flex-column align-items-center">
                    <img src="path-to-image1.jpg" class="rounded-circle" alt="Member Image" style="width: 100px;">
                    <p class="mt-4">"Bergabung dengan PAKUSARI benar-benar mengubah cara saya menjalankan bisnis. Saya
                        belajar banyak tentang pemasaran digital dan sekarang bisnis saya lebih dikenal." - Anggota UMKM
                        A</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex flex-column align-items-center">
                    <img src="path-to-image2.jpg" class="rounded-circle" alt="Member Image" style="width: 100px;">
                    <p class="mt-4">"Jaringan yang saya bangun melalui PAKUSARI sangat berharga. Saya bisa
                        berkolaborasi dengan pelaku UMKM lain dan saling mendukung." - Anggota UMKM B</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



{{-- Berita --}}
<section id="berita" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Daftar UMKM</h2>
            <p>Daftar UMKM di Kelurahan Karangsari</p>
        </div>

        <div class="row py-5" data-aos="flip-up">
            @foreach ($umkms as $umkm)
                <div class="row py-5" data-aos="flip-up">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <img src="{{ asset('storage/' . $umkm->images->first()->image_path) }}" class="card-img-top"
                                alt="Gambar UMKM">
                            <div class="card-body">
                                <h5 class="card-title">{{ $umkm->name }}</h5>
                                <p class="card-text">{{ Str::limit($umkm->description, 100, '...') }}</p>
                                <p class="text-muted"><strong>Alamat:</strong> {{ $umkm->address }}</p>
                                <p class="text-muted"><strong>Telepon:</strong> {{ $umkm->phone }}</p>
                                <a href="{{ route('umkm.show', $umkm->id) }}"
                                    class="btn btn-primary btn-sm float-right">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



        <div class="footer-berita text-center">
            <a href="/berita" class="btn btn-outline-danger">Lihat UMKM Lainnya</a>
        </div>

    </div>
</section>
{{-- Berita --}}


{{-- Join --}}
<section id="join" class="py-5">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5>PAKUSARI</h5>
                </div>
                <h1 class="fw-bold mb-2">Bergabung dengan PAKUSARI Sekarang!</h1>
                <p class="mb-3">Jadilah bagian dari komunitas UMKM yang solid dan tumbuh bersama kami.</p>
                <button class="btn btn-outline-danger">Daftar Sekarang</button>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('images/il-photo-04.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
{{-- Join --}}




@section('content')
@endsection
