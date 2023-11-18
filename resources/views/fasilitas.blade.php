@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/banner.png" alt="banner">
        <div class="line"></div>
        <div class="banner-desc">
            <p>PROFILE</p>
            <h1>FASILITAS SEKOLAH</h1>
        </div>
    </div>
    <div class="fasilitas-content">
        <div class="fasilitas-content-head">
            <p>PROFILE</p>
            <h1>FASILITAS SEKOLAH</h1>
        </div>
        <div class="fasilitas-content-body">
            <div class="fasilitas-card">
                <img src="/assets/fas-parkir.jpg" alt="fas-parkir">
                <div class="fasilitas-card-desc">
                    <p>Parkir 1</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-parkir2.jpg" alt="fas-parkir2">
                <div class="fasilitas-card-desc">
                    <p>Parkir 2</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-gerbang.jpg" alt="fas-gerbang">
                <div class="fasilitas-card-desc">
                    <p>Gerbang</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-lobby.jpg" alt="fas-lobby">
                <div class="fasilitas-card-desc">
                    <p>Lobby 1</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-lobby2.jpg" alt="fas-lobby2">
                <div class="fasilitas-card-desc">
                    <p>Lobby 2</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-lapangan.jpg" alt="lapangan">
                <div class="fasilitas-card-desc">
                    <p>Lapangan</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-gazeboo.jpg" alt="gazeboo">
                <div class="fasilitas-card-desc">
                    <p>Gazebo 1</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-gazeboo2.jpg" alt="gazeboo2">
                <div class="fasilitas-card-desc">
                    <p>Gazebo 2</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-toilet.jpg" alt="toilet">
                <div class="fasilitas-card-desc">
                    <p>Toilet</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-greenhouse.jpg" alt="greenhouse">
                <div class="fasilitas-card-desc">
                    <p>Green House</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-kantin.jpg" alt="kantin">
                <div class="fasilitas-card-desc">
                    <p>Kantin</p>
                </div>
            </div>
            <div class="fasilitas-card">
                <img src="/assets/fas-mushola.jpg" alt="mushola">
                <div class="fasilitas-card-desc">
                    <p>Mushola</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop