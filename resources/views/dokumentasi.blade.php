@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/banner.png" alt="banner">
        <div class="line"></div>
        <div class="banner-desc">
            <p>DOKUMENTASI</p>
            <h1>{{ $title }}</h1>
        </div>
    </div>
    <div class="dokumentasi-content">
        <div class="dokumentasi-content-head">
            <p>DOKUMENTASI</p>
            <h1>SMP NEGERI 4 TANGERANG {{ $title }}</h1>
        </div>
        <div class="fasilitas-content-body">
            @for ($i = 0; $i < 30; $i++) 
            <!-- <div class="dokumentasi-card">
                <img src="/assets/dokumentasi1.png" alt="dokumentasi1">
                <div class="dokumentasi-card-desc">
                    <p>17 November 2023</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse architecto quod inventore alias quaerat corrupti accusamus tempore deserunt saepe tenetur!</p>
                </div>
            </div> -->
            <div class="fasilitas-card">
                <img src="/assets/dokumentasi1.png" alt="dokumentasi1">
                    <div class="fasilitas-card-desc">
                        <p>Ini Judul Kegiatannya</p>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop