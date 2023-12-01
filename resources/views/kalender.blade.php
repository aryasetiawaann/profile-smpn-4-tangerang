@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/fas-lobby.jpg" alt="banner">
        <div class="line"></div>
        <div class="banner-desc">
            <p>AKADEMIK</p>
            <h1>KALENDER AKADEMIK</h1>
        </div>
    </div>
    <div class="kalender-content">
        <div class="kalender-content-head">
            <p>AKADEMIK</p>
            <h1>KALENDER AKADEMIK SEKOLAH</h1>
        </div>
        <div class="kalender-content-body">
            @forelse ($kalenders as $kalender)
            <div class="kalender-item">
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