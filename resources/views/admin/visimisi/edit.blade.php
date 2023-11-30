@extends('layouts.admin')

@section('content')
<div class="pengajar-admin-form-container">
    <h2 style="color: #fff;margin-bottom: 10px;">Edit {{$visimisi->judul}}</h2>
    <form method="POST" action="{{ route('admin.visimisi.update', $visimisi->id) }}">
        @csrf
        @method('PUT')
        <div class="input-nama">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $visimisi->judul) }}" required>
            @error('judul')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-deskripsi">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{ old('deskripsi', $visimisi->deskripsi) }}</textarea>
            @error('deskripsi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="pengajar-admin-submit">Simpan</button>
    </form>
</div>
@endsection
@php
$title = 'Edit Visimisi';
@endphp