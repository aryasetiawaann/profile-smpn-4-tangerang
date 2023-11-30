@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/fas-gerbang.jpg" alt="banner">
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
            @foreach($fasilitas as $facility)
                <div class="fasilitas-card">
                <img src="{{ asset('storage/' . $facility->photo) }}" alt="{{ $facility->name }}">
                    <div class="fasilitas-card-desc">
                        <p>{{ $facility->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop
@php
$title = 'Fasilitas';
@endphp