@extends('layouts.admin')

@section('content')
<div class="kalender-container">
    <div class="head-kalender">
        <h2>Kalender Akademik</h2>
    </div>
    <div class="kalender-body">
        <div class="button-add-kalender">
            <button><a href="{{ route('admin.kalender.create') }}">+ Add</a></button>
        </div>
        <div class="kalender-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Tanggal Upload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kalenders as $kalender)
                    <tr>
                        <td>{{ $kalender->title }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $kalender->file_path) }}" target="_blank">{{ $kalender->file_path }}</a>
                        </td>
                        <td>{{ $kalender->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <a href="{{ route('admin.kalender.edit', $kalender->id) }}">Edit</a>
                            <form action="{{ route('admin.kalender.destroy', $kalender->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">Tidak ada kalender.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@php
$title = 'Admin Kalender';
@endphp
