@extends('layouts.admin')

@section('content')
<h1>VISI MISI</h1>
<table border="1">
    @if ($visimisi->count() < 2)
        <a href="{{ route('admin.visimisi.create') }}" class="btn btn-success">Add Visi/Misi</a>
    @endif
    <tr>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Tindakan</th>
    </tr>
    <tbody>
        @foreach ($visimisi as $visimisiItem)
        <tr>
            <td>{{ $visimisiItem->judul }}</td>
            <td>{{ $visimisiItem->deskripsi }}</td>
            <td>
                <a href="{{ route('admin.visimisi.edit', $visimisiItem->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@php
$title = 'Admin Visimisi';
@endphp