@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="assets/banner3.png" alt="banner3">
        <div class="line">
            <marquee direction="left">SELAMAT DATANG DI WEBSITE SMP NEGERI 4 KOTA TANGERANG | UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</marquee>
        </div>
        <div class="banner-desc" data-aos="fade-up"
     data-aos-duration="1000">
            <p>PROFILE</p>
            <h1>EKSTRAKURIKULER</h1>
        </div>
    </div>
    <div class="ekskul-content">
        <div class="ekskul-content-head">
            <p>PROFILE</p>
            <h1>EKSTRAKURIKULER</h1>
        </div>
        <div class="ekskul-content-body" data-aos="fade-up"
     data-aos-duration="1000">
            @foreach($ekskul as $ekskul)
            <div class="ekskul-card shadow">
                <a href="/ekstrakurikuler/{{ $ekskul->id }}">
                    <img src="{{ 'storage/' . $ekskul->photo }}" alt="{{ $ekskul->nama }}">
                    <p>{{ $ekskul->nama }}</p>
                </a>
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
$title = 'Ekstrakurikuler';
@endphp