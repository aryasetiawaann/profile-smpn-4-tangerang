@extends('layouts.admin')

@section('content')
    <h1>Dokumentasi List</h1>
    <div>
        <label for="kelas">Filter by Class:</label>
        <select id="kelas" name="kelas" onchange="filterTable()">
            <option value="all">All Classes</option>
            <option value="kelas-7">Kelas 7</option>
            <option value="kelas-8">Kelas 8</option>
            <option value="kelas-9">Kelas 9</option>
        </select>
    </div>
    <a href="{{ route('admin.dokumentasi.create') }}">Add Dokumentasi</a>

    <table border="1">
        <tr>
            <th>Title</th>
            <th>Class</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
        <tbody id="dokumentasiTableBody">
            @foreach ($dokumentasi as $dokumentasiItem)
                <tr class="dokumentasiRow" data-kelas="{{ $dokumentasiItem->kelas }}">
                    <td>{{ $dokumentasiItem->judul }}</td>
                    <td>{{ $dokumentasiItem->kelas }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $dokumentasiItem->photo) }}" alt="{{ $dokumentasiItem->judul }}" style="width: 100px; height: auto;">
                    </td>
                    <td>
                        <a href="{{ route('admin.dokumentasi.edit', $dokumentasiItem->id) }}">Edit</a>
                        <form action="{{ route('admin.dokumentasi.destroy', $dokumentasiItem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="header-container">
    </div>

    <script>
        function filterTable() {
            var selectedKelas = document.getElementById('kelas').value;
            var rows = document.getElementsByClassName('dokumentasiRow');

            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                var kelas = row.getAttribute('data-kelas');

                if (selectedKelas === 'all' || selectedKelas === kelas) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            filterTable();
        });
    </script>
@endsection

@php
$title = 'Admin Dokumentasi';
@endphp.