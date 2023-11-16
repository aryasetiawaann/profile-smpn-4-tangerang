@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/banner.png" alt="banner">
        <div class="line"></div>
        <div class="banner-desc">
            <p>PROFILE</p>
            <h1>SEJARAH SEKOLAH</h1>
        </div>
    </div>
    <div class="sejarah-content">
        <div class="sejarah-content-head">
            <p>SEJARAH SEKOLAH</p>
            <h1>SMP NEGERI 4 TANGERANG</h1>
        </div>
        <div class="sejarah-content-body">
            <img src="/assets/foto-sekolah.png" alt="foto-sekolah">
            <div class="content-body-text">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro ducimus, ea magnam veniam exercitationem deserunt accusamus neque nobis in ipsam a dignissimos libero magni ab ullam, illo autem debitis eum at dolor excepturi sapiente quaerat. Magni cum similique sunt nobis quaerat consectetur ea, sint illum esse animi placeat ullam. Molestias reiciendis exercitationem fugiat, provident expedita eaque neque debitis necessitatibus ut repellendus, beatae, deserunt officiis quod illum laborum doloribus cupiditate laudantium eum. Aspernatur corrupti iste ab deleniti? Dolorum quo voluptas dignissimos ipsam exercitationem aliquam quaerat facilis quos asperiores error? Minima consequuntur repellat rem iste qui voluptate deserunt voluptates consectetur! Omnis, necessitatibus.</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam provident enim totam sunt asperiores hic, dignissimos ratione, in exercitationem ab error voluptatum expedita. Adipisci optio eum distinctio! Fugiat placeat, perspiciatis facilis alias non doloribus laudantium sequi aut neque, reiciendis earum, nihil mollitia cum. Voluptatum fugit facere blanditiis harum necessitatibus corporis dolorem quaerat aliquam asperiores! Ipsa, ducimus illum excepturi consectetur repellendus distinctio perferendis unde voluptatem adipisci vitae alias aperiam temporibus nam dolorem! Quos dignissimos ab expedita, distinctio ratione quia dicta soluta inventore, obcaecati nostrum sapiente vel? Voluptatum incidunt ipsam quidem magnam quo autem vel ratione amet aliquam. Voluptas quo in deserunt officiis, natus at sequi nesciunt nostrum voluptates exercitationem, maiores porro ad quisquam, nemo doloremque! Natus corrupti explicabo voluptatum facere laborum eius odio debitis illo velit, dolor iusto, quo placeat vitae. Soluta dicta ducimus optio tempora at iusto modi quam beatae reiciendis vitae! Nesciunt, rem veritatis debitis laborum odit consequatur alias!</p>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop