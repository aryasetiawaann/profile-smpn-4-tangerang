@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Kalender Akademik</h2>
    <form method="POST" action="{{ route('admin.kalender.update', $kalender->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $kalender->title }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="file">File (PDF only):</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" accept=".pdf">
            <small>Current File: <a href="{{ asset('storage/' . $kalender->file_path) }}" target="_blank">{{ $kalender->file_path }}</a></small>
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@php
$title = 'Edit Kalender Akademik';
@endphp
