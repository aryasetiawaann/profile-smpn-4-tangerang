@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/fas-lobby.jpg" alt="banner">
        <div class="line"></div>
        <div class="banner-desc">
            <h1>PENGUMUMAN DAN BERITA</h1>
        </div>
    </div>
    <div class="pengumuman-content">
        <div class="pengumuman-content-head">
            <p>TERKINI</p>
            <h1>PENGUMUMAN DAN BERITA</h1>
        </div>
        <div class="pengumuman-content-body">
            @foreach ($announcements as $announcement)
                <div class="home-berita-item">
                    <img src="{{ 'storage/' . $announcement->photo }}">
                    <div class="berita-item-desc">
                        <a href="/pengumuman-dan-berita/{{ $announcement->id }}" style="text-decoration:none;color:unset;">
                            <h5>{{ $announcement->judul }}</h5>
                        </a>
                        <p class="item-desc-date">{{ $announcement->tanggal->format('d F Y') }}</p>
                        <p>{{ Str::limit($announcement->deskripsi, 200) }}</p>
                        <a href="/pengumuman-dan-berita/{{ $announcement->id }}" style="text-decoration:none;color:unset;">
                            <p class="item-desc-more">Read More >></p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop

@php
$title = 'Pengumuman dan Berita';
@endphp
