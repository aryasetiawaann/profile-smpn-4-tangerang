@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Sambutan</h2>
    <form method="POST" action="{{ route('admin.sambutan.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Nama Kepala Sekolah:</label>
            <input type="text" class="form-control" id="namakepsek" name="namakepsek" required>
        </div>
        <div class="form-group">
            <label for="tim">Kata Sambutan:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Sambutan';
@endphp