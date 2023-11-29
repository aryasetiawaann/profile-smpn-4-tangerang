@extends('layouts.admin')

@section('content')
<div class="fasilitas-admin-container">
    <div class="fasilitas-admin-head">
        <h2>Fasilitas List</h2>
    </div>
    <div class="fasilitas-admin-body">
        <a href="{{ route('admin.fasilitas.create') }}" class="fasilitas-admin-add">+Add</a>
        <div class="fasilitas-admin-table-container">
            <table border="1">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitas as $fasilitasItem)
                    <tr>
                        <td>
                        <img class="fasilitas-admin-photo" src="{{ asset('storage/' . $fasilitasItem->photo) }}" alt="{{ $fasilitasItem->name }}">
                        </td>
                        <td>{{ $fasilitasItem->name }}</td>
                        <td>
                            <a class="fasilitas-admin-edit" href="{{ route('admin.fasilitas.edit', $fasilitasItem->id) }}"><img src="/assets/edit.png" alt="edit"></a>
                            <form action="{{ route('admin.fasilitas.destroy', $fasilitasItem->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="fasilitas-admin-delete" type="submit"><img src="/assets/trash.png" alt="trash"></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@php
$title = 'Admin Fasilitas';
@endphp