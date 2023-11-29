@extends('layouts.admin')

@section('content')
<div class="fasilitas-admin-form-container">
    <form method="POST" action="{{ route('admin.fasilitas.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-nama">
            <label for="name">Name</label>
            <input type="text" name="name" class="@error('name') is-invalid @enderror" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-photo">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="@error('photo') is-invalid @enderror" required/>
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="fasilitas-admin-submit">Simpan</button>
    </form>
</div>
@endsection
@php
$title = 'Tambah Fasilitas';
@endphp
