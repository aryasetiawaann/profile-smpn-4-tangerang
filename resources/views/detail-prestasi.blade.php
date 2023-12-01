@extends('layouts.app')

@section('content')
<div>
    <div class="detail-pengumuman-content">
        <div class="detail-pengumuman-content-head">
            <h1>{{ $prestasi->judul }}</h1>
        </div>
        <div class="detail-pengumuman-content-body">
            <div class="detail-pengumuman-info">
                <div class="detail-pengumuman-info-admin">
                    <p>{{ $prestasi->tim }}</p>
                </div>
                <div class="detail-pengumuman-info-date">
                    <img src="/assets/date.png" alt="date-info">
                    <p>{{ $prestasi->tanggal->format('d F Y') }}</p>
                </div>
            </div>
            <div class="detail-pengumuman-text">
                <img src="{{ asset('storage/' . $prestasi->photo) }}" alt="{{ $prestasi->judul }}">
                <div>
                    {!! nl2br(e($prestasi->deskripsi)) !!}
                </div>
            </div>
        </div>
        </div>
        <div class="home-berita-more" style="margin-bottom: 30px; margin-top: 0px;">
            <button><a href="/prestasi">Kembali</a></button>
        </div>
    </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@endsection

@php
$title = $prestasi->judul; // Use the announcement title as the page title
@endphp