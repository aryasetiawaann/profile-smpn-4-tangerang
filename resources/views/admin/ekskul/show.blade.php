@extends('layouts.app')

@section('content')
<div>
    <div class="detail-ekskul-content">
        <div class="detail-ekskul-content-head">
            <h1>EKSTRAKULIKULER</h1>
        </div>
        <div class="detail-ekskul-content-body">
            <h3>{{ $ekskul->nama }}</h3>
            <div class="detail-ekskul-info">
                <div class="detail-ekskul-info-admin">
                    <img src="/assets/admin-info.png" alt="admin-info">
                    <p>Admin</p>
                </div>
            </div>
            <div class="detail-ekskul-text">
                <img src="{{ 'storage/' . $ekskul->photo }}">
                <div>
                    {!! nl2br(e($ekskul->deskripsi)) !!}
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
$title = $ekskul->nama;
@endphp