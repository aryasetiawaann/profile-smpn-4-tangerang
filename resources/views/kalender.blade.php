@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/fas-lobby.jpg" alt="banner">
        <div class="line"></div>
        <div class="banner-desc" data-aos="fade-up"
     data-aos-duration="1000">
            <p>AKADEMIK</p>
            <h1>KURIKULUM</h1>
        </div>
    </div>
    <div class="kalender-content">
        <div class="kalender-content-head" data-aos="fade-left"
     data-aos-duration="1000">
            <p>AKADEMIK</p>
            <h1>KURIKULUM</h1>
        </div>
        <div class="kalender-content-body">
            @forelse ($kalenders as $kalender)
            <div class="kalender-item" data-aos="fade-up"
     data-aos-duration="1000">
                <h3>{{ $kalender->title }}</h3>
                <button>
                <a href="{{ asset('storage/' . $kalender->file_path) }}" target="_blank">
                        <!-- <img src="/assets/download.png" alt="" > -->
                        <p>Open File</p>
                    </a>
                </button>
            </div>

            @empty
            <p>Tidak ada kalender.</p>
            @endforelse
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop

@php
$title = 'Kalender Akademik';
@endphp