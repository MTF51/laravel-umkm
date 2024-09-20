{{-- @extends('layouts.app')

@section('content')
    <h1 class="text-center">Edit UMKM</h1>

    <form action="{{ route('admin.update', $umkm->id) }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="images">Foto-Foto UMKM</label>
            <input type="file" id="images" name="images[]" class="form-control-file" multiple>
            <div class="mt-3">
                @foreach ($umkm->images as $image)
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="img-thumbnail" style="max-width: 100px;">
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="name">Nama UMKM</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $umkm->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" class="form-control" required>{{ $umkm->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ $umkm->address }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon/WhatsApp</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ $umkm->phone }}" required>
        </div>
        <div class="form-group">
            <label for="social_media">Link ke Media Sosial (Opsional)</label>
            <input type="text" id="social_media" name="social_media" class="form-control"
                value="{{ $umkm->social_media }}">
        </div>
        <div class="form-group">
            <label for="operational_hours">Jam Operasional (Opsional)</label>
            <input type="text" id="operational_hours" name="operational_hours" class="form-control"
                value="{{ $umkm->operational_hours }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update UMKM</button>
    </form>
@endsection --}}




@extends('layouts.app')

@section('content')
    <h1 class="text-center">Edit UMKM</h1>

    <form action="{{ route('admin.update', $umkm->id) }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="images">Foto-Foto UMKM</label>
            <input type="file" id="images" name="images[]" class="form-control-file" multiple>
            <div class="mt-3">
                @foreach ($umkm->images as $image)
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="img-thumbnail" style="max-width: 100px;">
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="name">Nama UMKM</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $umkm->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" class="form-control" required>{{ $umkm->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ $umkm->address }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon/WhatsApp</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ $umkm->phone }}" required>
        </div>
        <div class="form-group">
            <label for="social_media">Link ke Media Sosial (Opsional)</label>
            <input type="text" id="social_media" name="social_media" class="form-control"
                value="{{ $umkm->social_media }}">
        </div>
        <div class="form-group">
            <label for="operational_hours">Jam Operasional (Opsional)</label>
            <input type="text" id="operational_hours" name="operational_hours" class="form-control"
                value="{{ $umkm->operational_hours }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update UMKM</button>
    </form>
@endsection
