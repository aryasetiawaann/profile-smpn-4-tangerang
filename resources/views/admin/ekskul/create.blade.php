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
    <form method="POST" action="{{ route('admin.ekskul.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="top-form">
            <div class="title-form">
                <label for="nama">Nama Ekstrakurikuler:</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="bot-form">
            <div class="description-form">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="file-form">
                <label for="photo">Foto:</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*" required>
                @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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
$title = 'Tambah Ekskul';
@endphp