@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="assets/banner3.png" alt="banner3">
        <div class="line"></div>
        <div class="banner-desc">
            <p>PROFILE</p>
            <h1>EKSTRAKULIKULER</h1>
        </div>
    </div>
    <div class="ekskul-content">
        <div class="ekskul-content-head">
            <p>PROFILE</p>
            <h1>EKSTRAKULIKULER</h1>
        </div>
        <div class="ekskul-content-body">
            <!-- BIKIN LOOP DISINI -->
            <div class="ekskul-card shadow">
                <a href="">
                    <img src="/assets/basket.jpeg" alt="basket">
                    <p>BASKET</p>
                </a>
            </div>
            <div class="ekskul-card shadow">
                <a href="">
                    <img src="/assets/banner3.png" alt="basket">
                    <p>Tari Tradisional</p>
                </a>
            </div>
            <div class="ekskul-card shadow">
                <a href="">
                    <img src="/assets/banner2.png" alt="basket">
                    <p>Pramuka</p>
                </a>
            </div>
            <div class="ekskul-card shadow">
                <a href="">
                    <img src="/assets/banner2.png" alt="basket">
                    <p>Pramuka</p>
                </a>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop