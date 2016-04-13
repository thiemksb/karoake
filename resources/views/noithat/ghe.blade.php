@extends('layouts.master')
@section('head.title') Ghế sofa phòng karaoke @stop
@section('head.mota') Cung cấp mẫu ghế sofa phòng karaoke, ghế phòng karaoke được bọc da,đá nhân tạo đính hạt cườm tạo ra những mẫu ghế hiện đại, sang trọng @stop
@section('head.keywords') ghe sofa phong karaoke, ghe phong karaoke boc da, @stop
@section('head.robots'){{ ROBOTS }}@stop
@section('head.ogurl'){{ route('noithat.ghe') }}@stop
@section('head.ogtype'){{ ARTICLE }}@stop
@section('head.ogimage'){{ asset('images/noithat/ghe-sofa-phong-karaoke.jpg') }}@stop
@section('head.css.gallery')
    <link rel="stylesheet" href="{{ asset('css/blueimp-gallery.min.css') }}">
@stop
@section('body.content')
    <section class="bgintro"><img src="{{ asset('images/noithat/ghe-sofa-phong-karaoke.jpg') }}" alt="ghe sofa phong karaoke" ></section>
    <section class="main container">

        <section class="row">
            <section class="col-md-9">
                <article class="bgwhite">

                    <h1>Ghế sofa phòng karaoke</h1>
                    <p> Cung cấp mẫu ghế sofa phòng karaoke, ghế phòng karaoke được bọc da, đính hạt cườm, đá nhân tại tạo ra những mẫu ghế hiện đại, sang trọng</p>

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
