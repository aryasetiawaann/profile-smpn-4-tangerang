@extends('layouts.admin')

@section('content')
<div class="dokumentasi-container">
    <div class="head-dokumentasi">
        <h1>Dokumentasi</h1>
    </div>
    <div class="dokumentasi-body">
        <div class="button-add-dokumentasi">
            <button><a href="">+ Add</a></button>
        </div>
        <div class="pengumuman-table">
         <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < 10; $i++) 
                <tr>
                    <td class="dokumentasi-table-img"><img src="../assets/fas-lobby.jpg" alt=""></td>
                    <td>Lorem ipsum SMPN 4 Tangerang</td>
                    <td class="deskripsi-dokumentasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                    <td>4 November 2019</td>
                    <td>Kelas 7</td>
                    <td class="dokumentasi-aksi-img"><img src="../assets/edit.png" alt="edit"> <img src="../assets/trash.png" alt="edit"></td>       
                </tr>
            @endfor
            </tbody>
         </table>
        </div>
    </div>
</div>
@stop