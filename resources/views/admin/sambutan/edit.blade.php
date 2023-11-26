@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Sambutan</h2>
    <form method="POST" action="{{ route('admin.sambutan.update', $sambutan->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="namakepsek">Nama Kepala Sekolah:</label>
            <input type="text" class="form-control" id="namakepsek" name="namakepsek" value="{{$sambutan->namakepsek}}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Kata Sambutan:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{$sambutan->deskripsi}}</textarea>
        </div>
        <div class="form-group">
            <label for="photo">Foto Kepala Sekolah:</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@php
    $title = 'Edit Sambutan';
@endphp