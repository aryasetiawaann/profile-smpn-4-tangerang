@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.fasilitas.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" class="@error('name') is-invalid @enderror" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="photo">Photo:</label>
        <input type="file" name="photo" class="@error('photo') is-invalid @enderror" required/>
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <button type="submit">Add Fasilitas</button>
    </form>
@endsection
@php
$title = 'Tambah Fasilitas';
@endphp
