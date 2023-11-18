@extends('layouts.admin')

@section('content')
<div class="ekskul-container">
    <div class="head-ekskul">
        <h1>Eksktrakurikular</h1>
    </div>
    <div class="ekskul-body">
        <div class="button-add-ekskul">
            <button><a href="">+ Add</a></button>
        </div>
        <div class="ekskul-table">
         <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama Ekstrakulikuler</th>
                    <th>Detail</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < 10; $i++) 
                <tr>
                    <td class="ekskul-table-img"><img src="../assets/kepsek.png" alt=""></td>
                    <td class="ekskul-judul">Sepakbola</td>
                    <td class="deskripsi-ekskul">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                    <td class="ekskul-aksi-img"><img src="../assets/edit.png" alt="edit"> <img src="../assets/trash.png" alt="edit"></td>       
                </tr>
            @endfor
            </tbody>
         </table>
        </div>
    </div>
</div>
@stop