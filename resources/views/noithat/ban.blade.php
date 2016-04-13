@extends('layouts.master')
@section('head.title') Bàn mini bar, bàn karaoke @stop
@section('head.mota') Mẫu bàn mini bar, bàn inox karaoke, bàn phòng karaoke, bán kính hoa văn, bàn kính 3d với đèn led bên trong phát sáng tạo nên chiếc bàn phòng karaoke đẹp, sang trọng @stop
@section('head.keywords') ban mini bar, ban karaoke, ban phong karoake, ban kinh inox @stop
@section('head.robots'){{ ROBOTS }}@stop
@section('head.ogurl'){{ route('noithat.ban') }}@stop
@section('head.ogtype'){{ ARTICLE }}@stop
@section('head.ogimage'){{ asset('images/noithat/ban-mini-bar-karaoke.jpg') }}@stop
@section('head.css.gallery')
    <link rel="stylesheet" href="{{ asset('css/blueimp-gallery.min.css') }}">
@stop
@section('body.content')
<section class="bgintro"><img src="{{ asset('images/noithat/ban-mini-bar-karaoke.jpg') }}" alt="ban mini bar karaoke" ></section>
    <section class="main container">

        <section class="row">
            <section class="col-md-9">
                <article class="bgwhite">

                    <h1>Bàn mini bar, bàn karaoke</h1>
                    <div class="fb-like" data-href="{{ route('noithat.ban') }}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                    <p>Nói đến nội thất trong phòng karaoke thì phải nói đến bàn. Thường thì chủ đầu tư hay hỏi nội thất hơn là <strong>bàn karaoke</strong>, cùng với đó bàn karaoke là phần thi công và lắp đặt khá dễ dàng. Chúng tôi sẽ đưa ra một số thông tin về bàn karaoke.</p>
                    <p>Khác với những năm vế trước, đa số dùng bàn đá hoặc bàn gỗ có rất nhiều nhược điểm và có vẻ lỗi thời. Hiện nay, chúng tôi cung cấp một số mẫu bàn karaoke để quý chủ đầu tư lựa chọn.</p>
                    <h3>Bàn mini bar</h3>
                    <figure class="text-center" >
                        <img src="images/noithat/ban.jpg" alt=" bàn mini bar karaoke">
                        <figcaption>Bàn mini bar karaoke</figcaption>
                    </figure>
                    <p>Có lẽ đây là mẫu bàn  hót nhất thời điểm hiện tại. Nó không hẳn là mini bar, chuẩn xác mà nói nó là bàn giả mini bar. Mặt trên là kính cường lực, bền dưới là lớp decal 3d. Chân được làm từ inox để giả mini bar</p>
                    <h3>Bàn kính hoa văn</h3>
                    <figure class="text-center" >
                        <img src="images/noithat/ban.jpg" alt=" bàn kính hoa văn karaoke">
                        <figcaption>Bàn kính hoa văn karaoke</figcaption>
                    </figure>
                    <p>Bàn kính hoa văn phù hợp với phòng karaoke có ghế thấp hay không có bục tôn nền vì chiều cao bàn thấp hơn bàn mini bar</p>

                    <p>Các mẫu bàn trên đều có đèn led bên trong phát sáng để thể hiện được decal hoặc họa tiết hoa văn. Kính được dùng là kính cường lực đảm bảo an toàn khi có sự cố bị vỡ.</p>
                    <p>Chúng tôi cung cấp các <strong>mẫu bàn karaoke</strong>,<strong>bàn mini bar karaoke</strong>  đa dạng và phóng phú, nhiều hình ảnh 3d để quý chủ đầu tư lựa chọn. Mong rằng qua bài này quý vị có thể nắm được thông tin rõ ràng.</p>

                </article>
                <section class="bgwhite cungchuyenmuc">
                    <h4>Bai viet cung chuyen muc</h4>
                    <ul>
                        <li><a href="">Noi that karaoke</a></li>
                    </ul>
                </section>
                <section class="bgwhite">
                    <h4>Hãy để lại bình luộn để chúng tôi được hỗ trợ!</h4>
                    <div class="fb-comments" data-href="{{ route('noithat.ban') }}/?id=abc" data-width="100%" data-numposts="5"></div>
                </section>
            </section>
            @include('partials.aside')
        </section>
    </section>
@stop
@section('body.js.gallery')
    <script src="{{ asset('js/jquery.blueimp-gallery.min.js') }}"></script>
@stop
