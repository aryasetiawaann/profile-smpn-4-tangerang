@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Visi Misi</h2>
    <form method="POST" action="{{ route('admin.visimisi.store') }}">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="tim">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Visimisi';
@endphp