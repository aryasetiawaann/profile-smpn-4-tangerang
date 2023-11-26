@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Visi Misi</h2>
    <form method="POST" action="{{ route('admin.visimisi.store') }}">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
            @error('judul')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Visimisi';
@endphp