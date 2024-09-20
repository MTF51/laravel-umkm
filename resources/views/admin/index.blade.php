{{-- @extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Admin Dashboard</h1>

    <h2 class="text-center mt-5">Tambah UMKM Baru</h2>
    <a href="{{ route('admin.create') }}" class="btn btn-primary d-block mx-auto mt-3">Tambah UMKM</a>

    <h2 class="text-center mt-5">Daftar UMKM</h2>

    <div class="row">
        @foreach ($umkms as $umkm)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $umkm->name }}</h5>
                        <p class="card-text">{{ $umkm->description }}</p>
                        <a href="{{ route('admin.edit', $umkm->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('admin.destroy', $umkm->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection --}}


@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Admin Dashboard</h1>

    <h2 class="text-center mt-5">Tambah UMKM Baru</h2>
    <a href="{{ route('admin.create') }}" class="btn btn-primary d-block mx-auto mt-3">Tambah UMKM</a>

    <h2 class="text-center mt-5">Daftar UMKM</h2>

    <div class="row">
        @foreach ($umkms as $umkm)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $umkm->name }}</h5>
                        <p class="card-text">{{ $umkm->description }}</p>
                        <a href="{{ route('admin.edit', $umkm->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('admin.destroy', $umkm->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
