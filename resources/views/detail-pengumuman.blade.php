@extends('layouts.app')

@section('content')
<div>
    <div class="detail-pengumuman-content">
        <div class="detail-pengumuman-content-head" data-aos="fade-down"
     data-aos-duration="1000">
            <h1>{{ $announcement->judul }}</h1>
        </div>
        <div class="detail-pengumuman-content-body" data-aos="fade-up"
     data-aos-duration="1000">
            <div class="detail-pengumuman-info">
                <div class="detail-pengumuman-info-admin">
                    <img src="/assets/admin-info.png" alt="admin-info">
                    <p>Admin</p>
                </div>
                <div class="detail-pengumuman-info-date">
                    <img src="/assets/date.png" alt="date-info">
                    <p>{{ $announcement->tanggal->format('d F Y') }}</p>
                </div>
            </div>
            <div class="detail-pengumuman-text">
                <img src="{{ asset('storage/' . $announcement->photo) }}" alt="{{ $announcement->judul }}">
                <div>
                    {!! nl2br(e($announcement->deskripsi)) !!}
                </div>
                @if($announcement->link)
                <div class="link-btn">
                    <button><a href="{{ $announcement->link }}" target="_blank">Open Link</a></button>
                </div>
                @endif
            </div>
        </div>
        <div class="home-berita-more" style="margin-bottom: 30px; margin-top: 0px;">
            <button><a href="/pengumuman-dan-berita">Kembali</a></button>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@endsection

@php
$title = $announcement->judul; // Use the announcement title as the page title
@endphp