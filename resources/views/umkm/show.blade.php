{{-- @extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div id="carousel{{ $umkm->id }}" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($umkm->images as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/'.$image->image_path) }}" class="d-block w-100" alt="Gambar UMKM">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel{{ $umkm->id }}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel{{ $umkm->id }}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <h2>{{ $umkm->name }}</h2>
            <p><strong>Deskripsi:</strong> {{ $umkm->description }}</p>
            <p><strong>Alamat:</strong> {{ $umkm->address }}</p>
            <p><strong>Telepon:</strong> {{ $umkm->phone }}</p>
            @if($umkm->social_media)
                <p><strong>Media Sosial:</strong> <a href="{{ $umkm->social_media }}" target="_blank">{{ $umkm->social_media }}</a></p>
            @endif
            @if($umkm->operational_hours)
                <p><strong>Jam Operasional:</strong> {{ $umkm->operational_hours }}</p>
            @endif
        </div>
    </div>
</div>

@endsection --}}



@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div id="carousel{{ $umkm->id }}" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($umkm->images as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/'.$image->image_path) }}" class="d-block w-100" alt="Gambar UMKM">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel{{ $umkm->id }}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel{{ $umkm->id }}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <h2>{{ $umkm->name }}</h2>
            <p><strong>Deskripsi:</strong> {{ $umkm->description }}</p>
            <p><strong>Alamat:</strong> {{ $umkm->address }}</p>
            <p><strong>Telepon:</strong> {{ $umkm->phone }}</p>
            @if($umkm->social_media)
                <p><strong>Media Sosial:</strong> <a href="{{ $umkm->social_media }}" target="_blank">{{ $umkm->social_media }}</a></p>
            @endif
            @if($umkm->operational_hours)
                <p><strong>Jam Operasional:</strong> {{ $umkm->operational_hours }}</p>
            @endif
        </div>
    </div>
</div>

@endsection
