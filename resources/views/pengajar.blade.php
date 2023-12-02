<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@php
    // Ambil data pengajar dari database
    $guru = \App\Models\Pengajar::all();
    $slides = $guru->chunk(8);
    $title = 'Pengajar';
@endphp

@extends('layouts.app')

@section('content')
    <div>
        <div class="banner">
            <img src="/assets/staff1.png" alt="banner2">
            <div class="line"></div>
            <div class="banner-desc">
                <p>PROFILE</p>
                <h1>STAFF PENGAJAR</h1>
            </div>
        </div>
        <div class="pengajar-content">
            <div class="pengajar-content-head">
                <p>PROFILE</p>
                <h1>STAFF PENGAJAR</h1>
            </div>
            <div class="pengajar-content-body">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($slides as $chunk)
                            <div class="swiper-slide">
                                @foreach($chunk as $slide)
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $slide->photo) }}" alt="{{ $slide->name }}">
                                        <div class="card-body">
                                            <p>{{ $slide->name }}</p>
                                            <p>{{ $slide->jabatan }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div>
            @include('partials.footer')
        </div>
    </div>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
@stop