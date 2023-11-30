@extends('layouts.admin')

@section('content')
<div class="dokumentasi-admin-form-container">
    <h2 style="color: #fff;margin-bottom: 10px;">Create Dokumentasi</h2>
    <form method="POST" action="{{ route('admin.dokumentasi.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-nama">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-kelas">
            <label for="kelas">Pilih Kelas</label>
            <select name="kelas" id="kelas">
                <option value="kelas-7">Kelas 7</option>
                <option value="kelas-8">Kelas 8</option>
                <option value="kelas-9">Kelas 9</option>
            </select>
        </div>

        <div class="input-photo">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="@error('photo') is-invalid @enderror" required/>
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="dokumentasi-admin-submit" type="submit">Simpan</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Dokumentasi';
@endphp