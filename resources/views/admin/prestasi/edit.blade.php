@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Prestasi</h2>
    <form method="POST" action="{{ route('admin.prestasi.update', $prestasi->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ $prestasi->judul }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tim">Tim:</label>
            <input type="text" class="form-control @error('tim') is-invalid @enderror" id="tim" name="tim" value="{{ $prestasi->tim }}" required>
            @error('tim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4" required>{{ $prestasi->deskripsi }}</textarea>
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('Y-m-d') }}" required>
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*">
            <img src="{{ asset('storage/' . $prestasi->photo) }}" alt="Photo" style="width: 100px; height: auto;">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@php
$title = 'Edit Prestasi';
@endphp
