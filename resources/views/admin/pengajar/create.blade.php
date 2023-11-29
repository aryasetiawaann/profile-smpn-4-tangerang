@extends('layouts.admin')

@section('content')
<div class="pengajar-admin-form-container">
    <form method="POST" action="{{ route('admin.pengajar.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-nama">
            <label for="name">Name</label>
            <input type="text" name="name" class="@error('name') is-invalid @enderror" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-jabatan">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" class="@error('jabatan') is-invalid @enderror" required>
            @error('jabatan')
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

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <button type="submit" class="pengajar-admin-submit">Simpan</button>
    </form>
</div>
@endsection

@php
$title = 'Tambah Pengajar';
@endphp
