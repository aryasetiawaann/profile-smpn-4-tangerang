@extends('layouts.admin')

@section('content')
<div class="container-edit">
    <div class="head-edit">
        <h1>Create Pengumuman dan Berita</h1>
    </div>
    <div class="inner-container">
    <div class="head-editpengumuman">
        <h1>UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</h1>
    </div>
    <form method="POST" action="{{ route('admin.announcement.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="top-form">
            <div class="title-form">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
                 @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>
            <div class="tim-form">
                <label for="tanggal">Tanggal (Hari ini):</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ now()->toDateString() }}" required readonly>
                @error('tanggal')
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
            <div class="title-form">
                    <label for="link">Link:</label>
                    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link') }}">
                    @error('link')
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
                <button a href="" class="my-button" type="submit">Simpan</button>
            </div>
    </form>
    </div>
</div>
@endsection
@php
$title = 'Tambah Pengumuman';
@endphp
