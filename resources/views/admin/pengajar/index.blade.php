@extends('layouts.admin')

@section('content')
<div class="pengajar-admin-container">
    <div class="pengajar-admin-head">
        <h2>Pengajar List</h2>
    </div>
    <div class="pengajar-admin-body">
        <a href="{{ route('admin.pengajar.create') }}" class="pengajar-admin-add">+Add</a>
        <div class="pengajar-admin-table-container">
            <table>
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Jabatan</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengajars as $pengajar)
                    <tr>
                        <td><img class="pengajar-admin-photo" src="{{ asset('storage/' . $pengajar->photo) }}" alt="{{ $pengajar->name }}" ></td>
                        <td>{{ $pengajar->name }}</td>
                        <td>{{ $pengajar->jabatan }}</td>
                        <td>
                            <a class="pengajar-admin-edit" href="{{ route('admin.pengajar.edit', $pengajar->id) }}"><img src="/assets/edit.png" alt="edit"></a>
                            <form action="{{ route('admin.pengajar.destroy', $pengajar->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="pengajar-admin-delete" type="submit"><img src="/assets/trash.png" alt="trash"></button>
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
$title = 'Admin Pengajar';
@endphp