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
            @foreach($ekskul as $ekskul)
            <div class="ekskul-card shadow">
                <a href="/ekstrakulikuler/{{ $ekskul->id }}">
                    <img src="{{ 'storage/' . $ekskul->photo }}" alt="{{ $ekskul->nama }}">
                    <p>{{ $ekskul->nama }}</p>
                </a>
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
$title = 'Ekstrakulikuler';
@endphp