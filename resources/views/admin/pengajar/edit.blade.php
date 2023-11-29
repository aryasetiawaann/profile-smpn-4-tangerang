@extends('layouts.admin')

@section('content')
<div class="pengajar-admin-form-container">
    <form method="POST" action="{{ route('admin.pengajar.update', $pengajar->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-nama">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $pengajar->name }}" class="@error('name') is-invalid @enderror" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-jabatan">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" value="{{ $pengajar->jabatan }}" class="@error('jabatan') is-invalid @enderror" required>
            @error('jabatan')
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

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <button type="submit" class="pengajar-admin-submit">Simpan</button>
    </form>
</div>
@endsection

@php
$title = 'Edit Pengajar';
@endphp
