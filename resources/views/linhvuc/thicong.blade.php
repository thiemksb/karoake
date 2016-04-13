@extends('layouts.master')
@foreach($data as $item)
@section('head.title'){{ $item->ten }}@stop
@section('head.mota'){{ $item->mota }}@stop
@section('head.keywords') thi cong karaoke @stop
@section('head.robots'){{ ROBOTS }}@stop
@section('head.ogurl'){{ route('linhvuc.thicong') }}@stop
@section('head.ogtype'){{ ARTICLE }}@stop
@section('head.ogtitle'){{ $item->ten }}@stop
@section('head.ogimage'){{ $item->image }}@stop
@section('head.css.gallery')
    <link rel="stylesheet" href="{{ asset('css/blueimp-gallery.min.css') }}">
@stop
@section('body.content')
    <section class="main gioithieu container">
        <section class="row">
            <section class="col-md-9">
                <article class="bgwhite">

                    <h1>{{  $item->ten }}</h1>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut deleniti eum expedita fugiat magni maxime praesentium quod? Animi assumenda aut cupiditate, fuga illum impedit modi mollitia perspiciatis placeat quae quia suscipit tempora, ullam? Adipisci amet eum excepturi illum magnam minima, natus nobis odit quisquam quos ratione sequi. Alias molestias, vel. Culpa dicta excepturi incidunt nesciunt nihil reiciendis repellendus, unde voluptatibus. Assumenda at commodi consectetur delectus dolorem dolores ea eius eos et, laborum laudantium nisi nulla numquam perferendis, porro quae quia quis sed totam veniam. Ab ad aliquam dolorem dolorum explicabo fuga labore, laudantium minima, officia perferendis quis sunt totam?</p>

                    <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
                </article>
                @include('partials.comment')
             </section>
            @include('partials.aside')
        </section>
    </section>
@stop
@section('body.js.gallery')
    <script src="{{ asset('js/jquery.blueimp-gallery.min.js') }}"></script>
@endforeach
@stop
