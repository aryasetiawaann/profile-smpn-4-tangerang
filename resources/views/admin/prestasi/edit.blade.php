@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Prestasi</h2>
    <form method="POST" action="{{ route('admin.prestasi.update', $prestasi->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $prestasi->judul }}" required>
        </div>
        <div class="form-group">
            <label for="tim">Tim:</label>
            <input type="text" class="form-control" id="tim" name="tim" value="{{ $prestasi->tim }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $prestasi->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('Y-m-d') }}" required>
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            <img src="{{ asset('storage/' . $prestasi->photo) }}" alt="Photo" style="width: 100px; height: auto;">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@php
$title = 'Edit Prestasi';
@endphp