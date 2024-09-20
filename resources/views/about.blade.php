{{-- @extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Tentang Kami</h1>

    <p class="text-center mt-3">
        Paguyuban Karangsari adalah organisasi yang bertujuan untuk menghubungkan dan memperkuat UMKM di daerah Karangsari.
        Kami menyediakan platform digital ini sebagai pusat informasi yang dapat diakses oleh semua pihak yang tertarik
        dengan perkembangan dan peluang yang ada di UMKM Karangsari.
    </p>

    <h2 class="text-center mt-5">Visi dan Misi</h2>
    <p class="text-center mt-3">
        Visi kami adalah untuk memajukan UMKM di Karangsari melalui digitalisasi informasi dan kolaborasi. Misi kami
        mencakup pemberdayaan ekonomi lokal, peningkatan kualitas produk, dan akses pasar yang lebih luas bagi para pelaku
        UMKM.
    </p>

    <h2 class="text-center mt-5">Struktur Organisasi</h2>
    <ul class="text-center list-unstyled mt-3">
        <li>Ketua: Nama Ketua</li>
        <li>Wakil Ketua: Nama Wakil Ketua</li>
        <li>Sekretaris: Nama Sekretaris</li>
        <li>Bendahara: Nama Bendahara</li>
    </ul>
@endsection --}}


@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Tentang Kami</h1>

    <p class="text-center mt-3">
        Paguyuban Karangsari adalah organisasi yang bertujuan untuk menghubungkan dan memperkuat UMKM di daerah Karangsari.
        Kami menyediakan platform digital ini sebagai pusat informasi yang dapat diakses oleh semua pihak yang tertarik
        dengan perkembangan dan peluang yang ada di UMKM Karangsari.
    </p>

    <h2 class="text-center mt-5">Visi dan Misi</h2>
    <p class="text-center mt-3">
        Visi kami adalah untuk memajukan UMKM di Karangsari melalui digitalisasi informasi dan kolaborasi. Misi kami
        mencakup pemberdayaan ekonomi lokal, peningkatan kualitas produk, dan akses pasar yang lebih luas bagi para pelaku
        UMKM.
    </p>


    <h2 class="text-center mt-5">Struktur Organisasi</h2>
    <div class="text-center mt-3">
        <img src="{{ asset('images/imagesstruktur-organisasi.jpg') }}" alt="Bagan Struktur Organisasi"
            style="max-width: 100%; height: auto;">
    </div>
    <div class="container mt-5 px-4 mx-4">
        <ul class="list-unstyled d-flex flex-wrap justify-content-center">
            <li class="d-flex justify-content-between w-100 mb-2" style="max-width: 800px; padding: 0 100px;">
                <span style="flex: 1; text-align: left;">Wakil Ketua: Ibu Rohmatun</span>
                <span style="flex: 1; text-align: right; margin-left: 5px;">Sekretaris: Mba Yani</span>
            </li>
            <li class="d-flex justify-content-between w-100 mb-2" style="max-width: 800px; padding: 0 100px;">
                <span style="flex: 1; text-align: left;">Bendahara: Ibu Mien Suharti</span>
                <span style="flex: 1; text-align: right; margin-left: 5px;">Divisi SDM: Ibu Ria</span>
            </li>
            <li class="d-flex justify-content-between w-100 mb-2" style="max-width: 800px; padding: 0 100px;">
                <span style="flex: 1; text-align: left;">Divisi Pemasaran: Ibu Solehka</span>
                <span style="flex: 1; text-align: right; margin-left: 5px;">Humas: Mas Fikri & Ibu Ayu</span>
            </li>
        </ul>
        <ul class="text-center list-unstyled mt-5">
            <li>Anggota : </li>
        </ul>
        <ul class="list-unstyled d-flex flex-wrap justify-content-center">

            <li class="d-flex justify-content-between w-100 mb-2" style="max-width: 800px; padding: 0 200px;">
                <span style="flex: 1; text-align: left;">1. Sumini</span>
                <span style="flex: 1; text-align: right; margin-left: 5px;">2. Subsidi</span>
            </li>
            <li class="d-flex justify-content-between w-100 mb-2" style="max-width: 800px; padding: 0 200px;">
                <span style="flex: 1; text-align: left;">3. Darmanto</span>
                <span style="flex: 1; text-align: right; margin-left: 5px;">4. Jumainah</span>
            </li>
            <li class="d-flex justify-content-between w-100 mb-2" style="max-width: 800px; padding: 0 200px;">
                <span style="flex: 1; text-align: left;">5. Rohmatun</span>
                <span style="flex: 1; text-align: right; margin-left: 5px;">6. Haris</span>
            </li>
        </ul>
    </div>




    <section class="mx-5 mt-5 px-5">
        <h2 class="text-center">WEBGIS PERSEBARAN UMKM</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="{{ asset('webgis/index.html#14/-6.9239/110.2121') }}" class="embed-responsive-item"
                style="width: 100%; height: 600px; border: none;"></iframe>
        </div>
    </section>

    <section class="mx-5 mt-5 px-5">
        <h2 class="text-center">WEBGIS PERSEBARAN KESENIAN</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="{{ asset('webgis2/index.html#14/-6.9239/110.2121') }}" class="embed-responsive-item"
                style="width: 100%; height: 600px; border: none;"></iframe>
        </div>
    </section>
@endsection
