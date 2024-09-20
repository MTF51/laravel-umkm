

@extends('layouts.app')

@section('content')
    <h1 class="text-center">Daftar UMKM</h1>

    <div class="row">
        @foreach ($umkms as $umkm)
            <div class="col-md-4">
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
        @endforeach
    </div>
@endsection
