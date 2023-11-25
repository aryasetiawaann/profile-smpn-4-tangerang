@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Pengumuman</h2>
    <form method="POST" action="{{ route('admin.announcement.update', $announcement->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $announcement->judul }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $announcement->deskripsi }}</textarea>
        </div>
        <!-- Tanggal diambil dari updated_at -->
        <div class="form-group">
            <label for="tanggal">Tanggal (Hari ini):</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ \Carbon\Carbon::parse($announcement->updated_at)->toDateString() }}" readonly>
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            <img src="{{ asset('storage/' . $announcement->photo) }}" alt="Photo" style="width: 100px; height: auto;">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@php
$title = 'Edit Pengumuman';
@endphp