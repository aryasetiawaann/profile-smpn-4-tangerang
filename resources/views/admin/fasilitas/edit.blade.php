@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $fasilitas->name }}" class="@error('name') is-invalid @enderror" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="photo">New Photo:</label>
        <input type="file" name="photo" accept="image/*" class="@error('photo') is-invalid @enderror">
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <button type="submit">Update Fasilitas</button>
    </form>
@endsection

@php
$title = 'Edit Fasilitas';
@endphp
