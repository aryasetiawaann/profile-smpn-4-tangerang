@extends('layouts.admin')

@section('content')
<div class="dokumentasi-admin-form-container">
    <h2 style="color: #fff;margin-bottom: 10px;">Edit Dokumentasi</h2>
    <form method="POST" action="{{ route('admin.dokumentasi.update', $dokumentasi->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-nama">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $dokumentasi->judul) }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-kelas">
            <label for="kelas">Pilih Kelas</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="kelas-7" {{ $dokumentasi->kelas === 'kelas-7' ? 'selected' : '' }}>Kelas 7</option>
                <option value="kelas-8" {{ $dokumentasi->kelas === 'kelas-8' ? 'selected' : '' }}>Kelas 8</option>
                <option value="kelas-9" {{ $dokumentasi->kelas === 'kelas-9' ? 'selected' : '' }}>Kelas 9</option>
            </select>
        </div>
        <div class="input-photo">
            <label for="photo">Foto</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <button class="dokumentasi-admin-submit" type="submit">Simpan</button>
    </form>
</div>
@endsection
@php
$title = 'Edit Dokumentasi';
@endphp
