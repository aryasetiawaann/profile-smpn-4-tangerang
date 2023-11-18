@extends('layouts.admin')

@section('content')
<main class="Edit-title">
    <h1>Edit Ekstrakulikuler</h1>
</main>
        <div class="container-edit">
            <div class="inner-container">
                <div class="head-editpengumuman">
                <h1>UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</h1>
                </div>
                <form action="" method="post">
                    <div class="top-form">
                        <div class="title-form">
                            <label for="title">Judul</label>
                            <input type="text" id="title" name="title" placeholder="Masukkan Judul" required>
                        </div>
                    </div>
                    <div class="bot-form">
                        <div class="description-form">
                        <label for="description">Deskripsi</label>
                        <textarea id="description" name="description" rows="10" cols="30" required></textarea>
                        </div>
                        <div class="file-form">
                            <label for="photo" class="file-label" >Choose file  |</label>
                            <input type="file" id="photo" name="photo" style="display: none;">
                            <span id="file-name">No file chosen</span>
                        </div>
                    </div>
                    <div class="simpan-button">
                    <button a href="" class="my-button" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
@stop