@extends('layouts.admin')

@section('content')
<div class="pengajar-admin-form-container">
    <h2 style="color: #fff;margin-bottom: 10px;">Create Sambutan</h2>
    <form method="POST" action="{{ route('admin.sambutan.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-nama">
            <label for="namakepsek">Nama Kepala Sekolah</label>
            <input type="text" class="form-control @error('namakepsek') is-invalid @enderror" id="namakepsek" name="namakepsek" required>
            @error('namakepsek')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-deskripsi">
            <label for="deskripsi">Kata Sambutan</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"></textarea>
            @error('deskripsi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-photo">
            <label for="photo">Foto</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*" required>
            @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="pengajar-admin-submit">Simpan</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Sambutan';
@endphp