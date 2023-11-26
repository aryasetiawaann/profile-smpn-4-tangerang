@extends('layouts.admin')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('admin.visimisi.update', $visimisi->id) }}">
        @csrf
        @method('PUT')
        <h2>Edit {{$visimisi->judul}}</h2>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{$visimisi->deskripsi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@php
    $title = 'Edit Visimisi';
@endphp