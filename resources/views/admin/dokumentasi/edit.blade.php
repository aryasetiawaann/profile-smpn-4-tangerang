@extends('admin.layouts.app')

@section('content')
    <h1>Edit Dokumentasi</h1>
    <form method="POST" action="{{ route('admin.dokumentasi.update', $dokumentasi->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $dokumentasi->judul) }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kelas">Pilih Kelas:</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="kelas-7" {{ $dokumentasi->kelas === 'kelas-7' ? 'selected' : '' }}>Kelas 7</option>
                <option value="kelas-8" {{ $dokumentasi->kelas === 'kelas-8' ? 'selected' : '' }}>Kelas 8</option>
                <option value="kelas-9" {{ $dokumentasi->kelas === 'kelas-9' ? 'selected' : '' }}>Kelas 9</option>
            </select>
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <img src="{{ asset('storage/' . $dokumentasi->photo) }}" alt="Photo" style="width: 100px; height: auto;">
        </div>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
@endsection
@php
$title = 'Edit Dokumentasi';
@endphp
