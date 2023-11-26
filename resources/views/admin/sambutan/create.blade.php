@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Sambutan</h2>
    <form method="POST" action="{{ route('admin.sambutan.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="namakepsek">Nama Kepala Sekolah:</label>
            <input type="text" class="form-control @error('namakepsek') is-invalid @enderror" id="namakepsek" name="namakepsek" required>
            @error('namakepsek')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi">Kata Sambutan:</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"></textarea>
            @error('deskripsi')
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
$title = 'Tambah Sambutan';
@endphp