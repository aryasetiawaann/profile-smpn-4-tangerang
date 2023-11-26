@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Tambah Kalender Akademik</h2>
    <form method="POST" action="{{ route('admin.kalender.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="file">File (PDF only):</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" accept=".pdf" required>
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Kalender Akademik';
@endphp
