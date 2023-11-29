@extends('layouts.admin')

@section('content')
<div class="container-edit">
<div class="head-edit">
        <h1>Edit Kalender</h1>
    </div>
    <div class="inner-container">
        <div class="head-editpengumuman">
            <h1>UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</h1>
        </div>
    <form method="POST" action="{{ route('admin.kalender.update', $kalender->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="top-form">
            <div class="title-form">
                <label for="title">Judul:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $kalender->title }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="bot-form">
            <div class="file-form">
                <label for="file">File (PDF only):</label>
                <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" accept=".pdf">
                <small>Current File: <a href="{{ asset('storage/' . $kalender->file_path) }}" target="_blank" style="color: #FFC436;">{{ $kalender->file_path }}</a></small>
                @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="simpan-button">
                <button a href="" class="my-button" type="submit">Update</button>
            </div>
    </form>
    </div>
</div>
@endsection
@php
$title = 'Edit Kalender Akademik';
@endphp
