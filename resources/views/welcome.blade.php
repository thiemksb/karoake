@extends('layouts.master')
@section('head.title') Đơn vị thi công thiết kế phòng karaoke @stop
@section('head.mota') Nội Thất HC là đơn vị chuyên thi công thiết kế phòng karaoke. Cung cấp các mẫu phòng karaoke đẹp, nội thất phòng karaoke với giá hợp lý. Hiệu ứng ánh sáng đẹp, vật liệu cách âm, tiêu âm chất lượng tốt @stop
@section('head.keywords') thi cong karaoke, thiet ke karaoke, thiet ke phong karaoke, thi cong phong karaoke, vat lieu cach am tieu am, noi that phong karaoke, noi that karaoke @stop
@section('head.robots'){{ ROBOTS }}@stop
@section('head.ogurl'){{ route('home') }}@stop
@section('head.ogtype'){{ WEBSITE }}@stop
@section('head.ogtitle') Đơn vị thi công thiết kế phòng karaoke @stop
@section('head.ogimage')@stop
@section('body.content')
<section class="slide">
    <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width:1300px; height:500px;overflow: hidden;">
        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div>
                <img u="image" src2="images/slide/1.jpg" />
            </div>
            <div>
                <img u="image" src2="images/slide/2.jpg" />
            </div>
            <div>
                <img u="image" src2="images/slide/3.jpg" />
            </div>
            <div>
                <img u="image" src2="images/slide/4.jpg" />
            </div>
        </div>

        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <div u="prototype"></div>
        </div>
        <style>
            .jssorb21 {
                position: absolute;
            }
            .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                position: absolute;
                width: 19px;
                height: 19px;
                text-align: center;
                line-height: 19px;
                color: white;
                font-size: 12px;
                background: url(images/b05.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb21 div { background-position: -5px -5px; }
            .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
            .jssorb21 .av { background-position: -65px -5px; }
            .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
            .jssora21l, .jssora21r {
                display: block;
                position: absolute;
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(images/a11.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora21l { background-position: -3px -33px; }
            .jssora21r { background-position: -63px -33px; }
            .jssora21l:hover { background-position: -123px -33px; }
            .jssora21r:hover { background-position: -183px -33px; }
            .jssora21l.jssora21ldn { background-position: -243px -33px; }
            .jssora21r.jssora21rdn { background-position: -303px -33px; }
        </style>
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
    </div>
</section>

<section class="videos">
    <div class="container">
        <h2 class="titleelement">Video phòng karaoke</h2>
        <div class="row">
            <div class="col-md-6 text-center">
                <section class="innervideo bgwhite">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZijGsUK73ic?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <h4>Phòng karaoke Mạnh Giang Club</h4>
                </section>
            </div>
            <div class="col-md-6 text-center">
                <section class="innervideo bgwhite">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/3YLs66XGIjk?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <h4>Phòng karaoke Mạnh Giang Club</h4>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <section class="innervideo bgwhite">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/A1tak__UZYY?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <h4>Phòng karaoke Mạnh Giang Club</h4>
                </section>
            </div>
            <div class="col-md-6 text-center">
                <section class="innervideo bgwhite">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/WCHELZ07DoY?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <h4>Phòng karaoke Mạnh Giang Club</h4>
                </section>
            </div>
        </div>
    </div>
</section>

<section class="mau3d">
    <div class="container">
        <h2 class="titleelement">Mẫu phòng karaoke</h2>
        <div class="row">
            <div class="col-md-4">
                <figure class="innermau3d text-center">
                    <img class="img-rounded" src="images/1.jpg">
                    <figcaption><a href="">Phòng karaoke sang trọng</a></figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="innermau3d text-center">
                    <img class="img-rounded" src="images/2.jpg">
                    <figcaption><a href="">Phòng karaoke sang trọng</a></figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="innermau3d text-center">
                    <img class="img-rounded" src="images/3.jpg">
                    <figcaption><a href="">Phòng karaoke sang trọng</a></figcaption>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <figure class="innermau3d text-center">
                    <img class="img-rounded" src="images/4.jpg">
                    <figcaption><a href="">Phòng karaoke sang trọng</a></figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="innermau3d text-center">
                    <img class="img-rounded" src="images/2.jpg">
                    <figcaption><a href="">Phòng karaoke sang trọng</a></figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="innermau3d text-center">
                    <img class="img-rounded" src="images/1.jpg">
                    <figcaption><a href="">Phòng karaoke sang trọng</a></figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="tuvan">
    <div class="container">
        <h2 class="titleelement">Tư vấn</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <figure class="innertuvan">
                    <img class="img-circle" src="images/1.jpg">
                    <figcaption><a href="">Thiết kế phòng karaoke</a></figcaption>
                </figure>
            </div>
            <div class="col-md-4 text-center">
                <figure class="innertuvan">
                    <img class="img-circle" src="images/3.jpg">
                    <figcaption><a href="">Thiết kế phòng karaoke</a></figcaption>
                </figure>
            </div>
            <div class="col-md-4 text-center">
                <figure class="innertuvan">
                    <img class="img-circle" src="images/1.jpg">
                    <figcaption><a href="">Thiết kế phòng karaoke</a></figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="noithat">
    <div class="container">
        <h2 class="titleelement" style="color: white;">Nội thất phòng karaoke</h2>
        <section class="row innernoithat">
            <div class="col-md-6 text-center"><img src="images/4.jpg"></div>
            <div class="col-md-6">
                <h4><a href="">Bàn karaoke - Bàn mini bar</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi architecto animi officiis voluptas, distinctio debitis corporis earum, odit nulla quia temporibus velit maxime neque veritatis quis voluptates. Praesentium, nisi. Vero!</p>
                <p><a class="more" href="">Đọc thêm</a></p>
            </div>
        </section>
        <section class="row innernoithat">
            <div class="col-md-6 text-center"><img src="images/2.jpg"></div>
            <div class="col-md-6">
                <h4><a href="">Bàn karaoke - Bàn mini bar</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi architecto animi officiis voluptas, distinctio debitis corporis earum, odit nulla quia temporibus velit maxime neque veritatis quis voluptates. Praesentium, nisi. Vero!</p>
                <p><a  class="more" href="">Đọc thêm</a></p>
            </div>
        </section>
        <section class="row innernoithat">
            <div class="col-md-6 text-center"><img src="images/2.jpg"></div>
            <div class="col-md-6">
                <h4><a href="">Bàn karaoke - Bàn mini bar</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi architecto animi officiis voluptas, distinctio debitis corporis earum, odit nulla quia temporibus velit maxime neque veritatis quis voluptates. Praesentium, nisi. Vero!</p>
                <p><a  class="more" href="">Đọc thêm</a></p>
            </div>
        </section>
    </div>
</section>
<section class="congtrinh">
    <div class="container">
        <h2 class="titleelement">Công trình</h2>
        <div class="row">
            <div class="col-md-3">
                <figure class="innercongtrinh text-center">
                    <img class="img-thumbnail" src="images/1.jpg">
                    <figcaption><a href="">12 Nguyễn Khang</a></figcaption>
                </figure>
            </div>
            <div class="col-md-3">
                <figure class="innercongtrinh text-center">
                    <img class="img-thumbnail" src="images/2.jpg">
                    <figcaption><a href="">12 Nguyễn Khang</a></figcaption>
                </figure>
            </div>
            <div class="col-md-3">
                <figure class="innercongtrinh text-center">
                    <img class="img-thumbnail" src="images/3.jpg">
                    <figcaption><a href="">12 Nguyễn Khang</a></figcaption>
                </figure>
            </div>
            <div class="col-md-3">
                <figure class="innercongtrinh text-center">
                    <img class="img-thumbnail" src="images/4.jpg">
                    <figcaption><a href="">12 Nguyễn Khang</a></figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="nhanxet clearfix">
    <div class="container">
        <h2 class="titleelement">Nhận xét của chủ đầu tư</h2>
        <div class="row">
            <div class="col-md-6">
                <section class="innernhanxet">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img class="img-circle" src="images/1.jpg">
                            <p><a href="">Anh Hải</a></p>
                        </div>
                        <div class="col-md-8">
                            <blockquote>Công trình này tôi rất hài lòng Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, vitae.</blockquote>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="innernhanxet">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img class="img-circle" src="images/2.jpg">
                            <p><a href="">Anh Hải</a></p>
                        </div>
                        <div class="col-md-8">
                            <blockquote>Công trình này tôi rất hài lòng 7Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, eveniet!</blockquote>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

@stop
@section('body.js.slide')
    <script src="js/slide.js"></script>
    <script src="js/jssor.slider.mini.js"></script>
 @stop