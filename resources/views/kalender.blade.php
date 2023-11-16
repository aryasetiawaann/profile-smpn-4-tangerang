@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/banner.png" alt="banner">
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
            <div class="kalender-item">
                <h3>Kalender Pendidikan SMT Genap 2022-2023</h3>
                <button>
                    <img src="/assets/download.png" alt="">
                    <p>Download File</p>
                </button>
            </div>
            <div class="kalender-item">
                <h3>Kalender Pendidikan SMT Ganjil 2022-2023</h3>
                <button>
                    <img src="/assets/download.png" alt="">
                    <p>Download File</p>
                </button>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop