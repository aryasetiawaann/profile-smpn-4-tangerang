@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Pengumuman</h2>
    <form method="POST" action="{{ route('admin.announcement.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
        </div>
        <!-- Tanggal diambil dari created_at -->
        <div class="form-group">
            <label for="tanggal">Tanggal (Hari ini):</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ now()->toDateString() }}" required readonly>
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Pengumuman';
@endphp