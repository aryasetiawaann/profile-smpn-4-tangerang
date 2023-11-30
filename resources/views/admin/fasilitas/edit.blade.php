@extends('layouts.admin')

@section('content')
<div class="fasilitas-admin-form-container">
    <h2 style="color: #fff;margin-bottom: 10px;">Edit Fasilitas</h2>
    <form method="POST" action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="input-nama">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $fasilitas->name }}" class="@error('name') is-invalid @enderror" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-photo">
            <label for="photo">New Photo</label>
            <input type="file" name="photo" accept="image/*" class="@error('photo') is-invalid @enderror">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="fasilitas-admin-submit" type="submit">Simpan</button>
    </form>
</div>
@endsection
@php
$title = 'Edit Fasilitas';
@endphp
