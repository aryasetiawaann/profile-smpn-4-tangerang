@extends('layouts.admin')

@section('content')
<h1>Kata Sambutan</h1>
<table border="1">
    <tr>
        <th>Kepala Sekolah</th>
        <th>Kata Sambutan</th>
        <th>Foto</th>
        <th>Tindakan</th>
    </tr>
    <tbody>
        @foreach ($sambutan as $sambutanItem)
        <tr>
            <td>{{ $sambutanItem->namakepsek }}</td>
            <td>{{ $sambutanItem->deskripsi }}</td>
            <td>
                <img src="{{ Storage::url($sambutanItem->photo) }}" alt="Foto Kepsek" style="max-width: 100px; max-height: 250px;">
            </td>
            <td>
                <a href="{{ route('admin.sambutan.edit', $sambutanItem->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@php
$title = 'Admin Sambutan';
@endphp