@extends('layouts.admin')

@section('content')
<h1>Fasilitas List</h1>
<a href="{{ route('admin.fasilitas.create') }}">Add Fasilitas</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
    <tbody>
        @foreach ($fasilitas as $fasilitasItem)
        <tr>
            <td>{{ $fasilitasItem->name }}</td>
            <td>
            <img src="{{ asset('storage/' . $fasilitasItem->photo) }}" alt="{{ $fasilitasItem->name }}" style="width: 100px; height: auto;">
            </td>
            <td>
                <a href="{{ route('admin.fasilitas.edit', $fasilitasItem->id) }}">Edit</a>
                <form action="{{ route('admin.fasilitas.destroy', $fasilitasItem->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@php
$title = 'Admin Fasilitas';
@endphp