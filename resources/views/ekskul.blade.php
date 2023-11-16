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
            <div class="ekskul-card shadow" style="background-color: #0174BE;">
                <a href="">
                    <img src="assets/eks-basket.png" alt="basket">
                    <p>Basket</p>
                </a>
            </div>
            <div class="ekskul-card shadow" style="background-color: #1EC1D9;">
                <a href="">
                    <img src="assets/eks-dance.png" alt="dance">
                    <p>Tari Tradisional</p>
                </a>
            </div>
            <div class="ekskul-card shadow" style="background-color: #10C45C;">
                <a href="">
                    <img src="assets/eks-bola.png" alt="bola">
                    <p>Sepakbola</p>
                </a>
            </div>
            <div class="ekskul-card shadow" style="background-color: #FFC436;">
                <a href="">
                    <img src="assets/eks-buku.png" alt="buku">
                    <p>English Club Competition (ECC)</p>
                </a>
            </div>
            <div class="ekskul-card shadow" style="background-color: #E84B3A;">
                <a href="">
                    <img src="assets/eks-voli.png" alt="voli">
                    <p>Voli</p>
                </a>
            </div>
            <div class="ekskul-card shadow" style="background-color: #47C58E;">
                <a href="">
                    <img src="assets/eks-pmr.png" alt="pmr">
                    <p>Palang Merah Remaja (PMR)</p>
                </a>
            </div>
            <div class="ekskul-card shadow" style="background-color: #E948AE;">
                <a href="">
                    <img src="assets/eks-kir.png" alt="kir">
                    <p>Karya Ilmiah Remaja (KIR)</p>
                </a>
            </div>
            <div class="ekskul-card shadow" style="background-color: #92278F;">
                <a href="">
                    <img src="assets/eks-badmin.png" alt="badmin">
                    <p>Badminton</p>
                </a>
            </div>
            <div class="ekskul-card shadow" style="background-color: #0C356A;">
                <a href="">
                    <img src="assets/eks-pingpong.png" alt="pingpong">
                    <p>Tenis Meja</p>
                </a>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop