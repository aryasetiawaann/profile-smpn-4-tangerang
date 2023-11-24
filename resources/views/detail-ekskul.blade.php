@extends('layouts.app')

@section('content')
<div>
    <div class="detail-ekskul-content">
        <div class="detail-ekskul-content-head">
            <h1>DETAIL EKSTRAKULIKULER</h1>
        </div>
        <div class="detail-ekskul-content-body">
            <h3>Ekskul Basket</h3>
            <div class="detail-ekskul-info">
                <div class="detail-ekskul-info-admin">
                    <img src="/assets/admin-info.png" alt="admin-info">
                    <p>Admin</p>
                </div>
                <div class="detail-ekskul-info-date">
                    <img src="/assets/date.png" alt="date-info">
                    <p>tanggal</p>
                </div>
            </div>
            <div class="detail-ekskul-text">
                <img src="/assets/banner.png" alt="tes">
                <div>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint labore quam dolorum? Explicabo quisquam id rem nemo, autem unde nisi, esse veniam eaque assumenda ipsum voluptatibus quam nulla debitis fuga itaque ipsa nihil dolorum ipsam magnam perspiciatis iusto. Voluptas eum necessitatibus dolorum consequatur unde iure odit veritatis fugiat quaerat dignissimos, nemo aliquam, hic exercitationem reiciendis quas ut minima omnis. Eligendi voluptates dolores exercitationem, harum ea et laborum voluptas tempora quae fuga nemo quasi iure, porro repellat ipsam maiores ex perspiciatis! Earum, sequi culpa quae doloribus provident animi, blanditiis facere, a mollitia eaque pariatur autem aut ab odit perferendis ut magni!
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@endsection

