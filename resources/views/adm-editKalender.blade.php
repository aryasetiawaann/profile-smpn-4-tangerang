@extends('layouts.admin')

@section('content')
<main class="Edit-title">
    <h1>Edit Kalender</h1>
</main>
    <div>
        <div class="container-edit">
            <div class="inner-container">
                <h1>UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</h1>
                <form action="" method="post">
                    <div class="top-form">
                        <div class="title-form">
                            <label for="title">Judul</label>
                            <input type="text" id="title" name="title" placeholder="Masukkan Judul" required>
                        </div>
                    </div>
                    <div class="bot-form">
                        <div class="file-form">
                            <label for="photo" class="file-label" >Choose file  |</label>
                            <input type="file" id="photo" name="photo" style="display: none;">
                            <span id="file-name">No file chosen</span>
                        </div>
                    </div>
                    <button a href="" class="my-button" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@stop