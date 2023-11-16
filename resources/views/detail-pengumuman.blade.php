@extends('layouts.app')

@section('content')
<div>
    <div class="detail-pengumuman-content">
        <div class="detail-pengumuman-content-head">
            <h1>PENGUMUMAN DAN BERITA</h1>
        </div>
        <div class="detail-pengumuman-content-body">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cumque.</h3>
            <div class="detail-pengumuman-info">
                <div class="detail-pengumuman-info-admin">
                    <img src="/assets/admin-info.png" alt="admin-info">
                    <p>admin</p>
                </div>
                <div class="detail-pengumuman-info-date">
                    <img src="/assets/date.png" alt="date-info">
                    <p>4 November 2023</p>
                </div>
            </div>
            <div class="detail-pengumuman-text">
                <img src="/assets/banner.png" alt="banner">
                <div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium blanditiis repudiandae quae consequuntur tenetur ullam sunt nulla tempore reprehenderit non maxime aperiam possimus distinctio, odit corrupti rerum. Nulla architecto exercitationem eius ipsam accusamus! Enim numquam harum non cum asperiores distinctio officiis, neque maiores dignissimos blanditiis dolores, ducimus laboriosam, qui doloremque.</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nesciunt? Iste similique voluptas aperiam earum, autem assumenda asperiores sed commodi error dolor laboriosam, sit voluptatum ipsa, perferendis temporibus facilis quam quidem vero. Velit temporibus delectus vitae labore voluptatum architecto placeat commodi nemo natus ipsam! Optio aliquid ratione quas laborum error rem ea reiciendis assumenda quos saepe odit quia sunt provident velit, unde consectetur, quisquam, eos consequuntur facilis ipsam sit officia hic. Nostrum molestias quis quia nihil ratione assumenda animi sunt illo, dicta molestiae tenetur exercitationem sint explicabo debitis adipisci eveniet, veritatis aperiam reiciendis optio corrupti magnam totam blanditiis modi. Veritatis deserunt voluptates sed alias cumque ullam molestias error nisi, quod voluptatibus incidunt quas totam labore illo est, modi deleniti explicabo hic. Sequi odit assumenda consectetur quas quis enim nesciunt praesentium corporis maiores vitae unde iste, asperiores neque officiis deleniti totam fugiat aliquid voluptas rem consequuntur modi ratione placeat sed. Amet!</p>

                </div>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop