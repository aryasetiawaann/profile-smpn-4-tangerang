@extends('layouts.admin')

@section('content')
<div class="container-edit">
<div class="head-edit">
        <h1>Tambah Kurikulum</h1>
    </div>
    <div class="inner-container">
    <div class="head-editpengumuman">
        <h1>UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</h1>
    </div> 
    <form method="POST" action="{{ route('admin.kalender.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="top-form">
            <div class="title-form">
                <label for="title">Judul:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="bot-form">
            <div class="file-form">
                <label for="file">File (PDF only):</label>
                <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" accept=".pdf" required>
                @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="simpan-button">
                <button a href="" class="my-button" type="submit">Simpan</button>
            </div>
    </form>
    </div>
</div>
@endsection
@php
$title = 'Tambah Kalender Akademik';
@endphp
