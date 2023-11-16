@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/banner2.png" alt="banner2">
        <div class="line"></div>
        <div class="banner-desc">
            <p>PROFILE</p>
            <h1>STAFF PENGAJAR</h1>
        </div>
    </div>
    <div class="pengajar-content">
        <div class="pengajar-content-head">
                <p>STAFF</p>
                <h1>STAFF PENGAJAR</h1>
        </div>
        <div class="pengajar-content-body">
            <div class="pengajar-card-container">
                <div class="pengajar-card">
                    <img src="" alt="">
                    <div class="pengajar-card-desc">
                        <h3>Lionel Messi, S.Ag.</h3>
                        <p>Guru ipa</p>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>

@stop