@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Prestasi</h2>
    <form method="POST" action="{{ route('admin.prestasi.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tim">Tim:</label>
            <input type="text" class="form-control @error('tim') is-invalid @enderror" id="tim" name="tim" required>
            @error('tim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required>
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*" required>
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Prestasi';
@endphp
