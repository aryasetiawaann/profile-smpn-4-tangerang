@extends('layouts.admin')

@section('content')
<div class="container-edit">
    <div class="head-edit">
        <h1>Edit Ekstrakurikuler</h1>
    </div>
    <div class="inner-container">
    <div class="head-editpengumuman">
        <h1>UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</h1>
    </div>
    <form method="POST" action="{{ route('admin.ekskul.update', $ekskul->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="top-form">
            <div class="title-form">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $ekskul->nama) }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="bot-form">
            <div class="description-form">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="file-form">
                <label for="photo">Foto:</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*">
                @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <img src="{{ asset('storage/' . $ekskul->photo) }}" alt="Photo" style="width: 100px; height: auto;">
            </div>
        </div>
            <div class="simpan-button">
                <button a href="" class="my-button" type="submit">Update</button>
            </div>
    </form>
    </div>
</div>
@endsection
@php
$title = 'Edit Ekskul';
@endphp








