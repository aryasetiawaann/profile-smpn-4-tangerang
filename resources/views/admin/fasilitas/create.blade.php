@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.fasilitas.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" required/>

        <button type="submit">Add Fasilitas</button>
    </form>
@endsection
@php
$title = 'Tambah Fasilitas';
@endphp