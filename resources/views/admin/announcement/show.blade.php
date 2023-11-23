@extends('layouts.app')

@section('content')
<div>
    <div class="detail-pengumuman-content">
        <div class="detail-pengumuman-content-head">
            <h1>PENGUMUMAN DAN BERITA</h1>
        </div>
        <div class="detail-pengumuman-content-body">
            <h3>{{ $announcement->judul }}</h3>
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
                <img src="{{ $announcement->photo }}" alt="banner">
                <div>
                    {!! $announcement->deskripsi !!}
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop

@php
$title = $announcement->judul; // Use the announcement title as the page title
@endphp
