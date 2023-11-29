@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.dokumentasi.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="kelas">Pilih Kelas:</label>
            <select name="kelas" id="kelas">
                <option value="kelas-7">Kelas 7</option>
                <option value="kelas-8">Kelas 8</option>
                <option value="kelas-9">Kelas 9</option>
            </select>
        </div>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" class="@error('photo') is-invalid @enderror" required/>
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <button type="submit">Add Dokumentasi</button>
    </form>
@endsection
@php
$title = 'Tambah Dokumentasi';
@endphp