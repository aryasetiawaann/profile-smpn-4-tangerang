@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $fasilitas->name }}" required>

        <label for="photo">New Photo:</label>
        <input type="file" name="photo" accept="image/*">

        <button type="submit">Update Fasilitas</button>
    </form>
@endsection

@php
$title = 'Edit Fasilitas';
@endphp
