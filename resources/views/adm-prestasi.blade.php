@extends('layouts.admin')

@section('content')
<div class="pengumuman-container">
    <div class="head-pengumuman">
        <h1>Prestasi dan Pencapaian</h1>
    </div>
    <div class="isi-table">
        <div class="button-add-pengumuman">
            <button><a href="/admin/prestasi/edit">+ Add</a></button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < 10; $i++) 
                <tr>
                    <td class="pengumuman-table-img"><img src="assets/kepsek.png" alt=""></td>
                    <td>Lorem ipsum SMPN 4 Tangerang</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                    <td>4 November 2019</td>
                    <td class="pengumuman-aksi-img"><img src="assets/edit.png" alt="edit"> <img src="assets/trash.png" alt="edit"></td>       
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
@stop