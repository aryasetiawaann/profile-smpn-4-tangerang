@extends('layouts.app')

@section('content')
<div>
    <div class="detail-pengumuman-content">
        <div class="detail-pengumuman-content-head">
            <h1>Prestasi</h1>
        </div>
        <div class="detail-pengumuman-content-body">
            <h3>{{ $prestasi->judul }}</h3>
            <div class="detail-pengumuman-info">
                <div class="detail-pengumuman-info-admin">
                    <img src="/assets/admin-info.png" alt="admin-info">
                    <p>Admin</p>
                </div>
                <div class="detail-pengumuman-info-date">
                    <img src="/assets/date.png" alt="date-info">
                    <p>{{ $prestasi->tanggal->format('d F Y') }}</p>
                </div>
            </div>
            <div class="detail-pengumuman-text">
                <img src="{{ $prestasi->photo }}" alt="banner">
                <div>
                    {!! $prestasi->deskripsi !!}
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
$title = $prestasi->judul; 
@endphp
