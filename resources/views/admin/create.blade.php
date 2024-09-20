{{-- @extends('layouts.app')

@section('content')

    <h1 class="text-center">Tambah UMKM Baru</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="images">Foto-Foto UMKM</label>
            <input type="file" id="images" name="images[]" class="form-control-file" multiple required>
        </div>
        <div class="form-group">
            <label for="name">Nama UMKM</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon/WhatsApp</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="social_media">Link ke Media Sosial (Opsional)</label>
            <input type="text" id="social_media" name="social_media" class="form-control">
        </div>
        <div class="form-group">
            <label for="operational_hours">Jam Operasional (Opsional)</label>
            <input type="text" id="operational_hours" name="operational_hours" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Tambahkan UMKM</button>
    </form>
@endsection --}}





@extends('layouts.app')

@section('content')

    <h1 class="text-center">Tambah UMKM Baru</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="images">Foto-Foto UMKM</label>
            <input type="file" id="images" name="images[]" class="form-control-file" multiple required>
        </div>
        <div class="form-group">
            <label for="name">Nama UMKM</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon/WhatsApp</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="social_media">Link ke Media Sosial (Opsional)</label>
            <input type="text" id="social_media" name="social_media" class="form-control">
        </div>
        <div class="form-group">
            <label for="operational_hours">Jam Operasional (Opsional)</label>
            <input type="text" id="operational_hours" name="operational_hours" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Tambahkan UMKM</button>
    </form>
@endsection
