@extends('layouts.app')

@section('content')
<div>
    <div class="detail-pengumuman-content">
        <div class="detail-pengumuman-content-head" data-aos="fade-down"
     data-aos-duration="1000">
            <h1>EKSTRAKURIKULER</h1>
        </div>
        <div class="detail-pengumuman-content-body" data-aos="fade-up"
     data-aos-duration="1000">
            <h3>{{ $ekskul->nama }}</h3>
            <div class="detail-pengumuman-info">
                <div class="detail-pengumuman-info-admin">
                    <img src="/assets/admin-info.png" alt="admin-info">
                    <p>Admin</p>
                </div>
            </div>
            <div class="detail-pengumuman-text">
            <img src="{{ asset('storage/' . $ekskul->photo) }}" alt="{{ $ekskul->judul }}">
                <div>
                    {!! nl2br(e($ekskul->deskripsi)) !!}
                </div>
            </div>
        </div>
        <div class="home-berita-more" style="margin-bottom: 30px; margin-top: 0px;">
            <button><a href="/ekstrakurikuler">Kembali</a></button>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@endsection

@php
$title = $ekskul->nama;
@endphp