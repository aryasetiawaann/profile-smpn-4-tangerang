@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Tambah Kalender Akademik</h2>
    <form method="POST" action="{{ route('admin.kalender.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="file">File (PDF only):</label>
            <input type="file" class="form-control" id="file" name="file" accept=".pdf" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Kalender Akademik';
@endphp
