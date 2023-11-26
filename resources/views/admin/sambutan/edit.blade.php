@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Sambutan</h2>
    <form method="POST" action="{{ route('admin.sambutan.update', $sambutan->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="namakepsek">Nama Kepala Sekolah:</label>
            <input type="text" class="form-control @error('namakepsek') is-invalid @enderror" id="namakepsek" name="namakepsek" value="{{ $sambutan->namakepsek }}">
            @error('namakepsek')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi">Kata Sambutan:</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{ $sambutan->deskripsi }}</textarea>
            @error('deskripsi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="photo">Foto Kepala Sekolah:</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/*">
            @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@php
$title = 'Edit Sambutan';
@endphp