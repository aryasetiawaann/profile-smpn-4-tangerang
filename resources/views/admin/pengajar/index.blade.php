@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Pengajar List</h1>
        <a href="{{ route('admin.pengajar.create') }}">Add Pengajar Baru</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Jabatan</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengajars as $pengajar)
                    <tr>
                        <td>{{ $pengajar->name }}</td>
                        <td>{{ $pengajar->jabatan }}</td>
                        <td><img src="{{ asset('storage/' . $pengajar->photo) }}" alt="{{ $pengajar->name }}" style="width: 100px; height: auto;"></td>
                        <td>
                            <a href="{{ route('admin.pengajar.edit', $pengajar->id) }}">Edit</a>
                            <form action="{{ route('admin.pengajar.destroy', $pengajar->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    @php
    $title = 'Pengajar List';
    @endphp
@endsection