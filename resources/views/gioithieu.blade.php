@extends('layouts.master')
@section('head.title') Giới thiệu @stop
@section('head.mota') Nội Thất HC là đơn vị chuyên thi công thiết kế phòng karaoke. Cung cấp các mẫu phòng karaoke đẹp, nội thất phòng karaoke với giá hợp lý. Hiệu ứng ánh sáng đẹp, vật liệu cách âm, tiêu âm chất lượng tốt @stop
@section('head.keywords') thi cong karaoke, thiet ke karaoke, thiet ke phong karaoke, thi cong phong karaoke, mau phong karaoke, vat lieu cach am tieu am, noi that phong karaoke, noi that karaoke @stop
@section('head.robots'){{ ROBOTS }}@stop
@section('head.ogurl'){{ route('gioithieu') }}@stop
@section('head.ogtype'){{ ARTICLE }}@stop
@section('head.ogimage')@stop
@section('head.css.gallery')
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
@stop
@section('body.content')
<section class="main gioithieu container">
    <section class="row">
        <section class="col-md-9">
            <article class="bgwhite">
                <h1>Giới thiệu</h1>
                <div class="fb-like" data-href="{{ route('gioithieu') }}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                <h4> * Sứ mệnh</h4>
                <p>Ngay từ lúc đầu, ban giám đốc đã chỉ thị nhân viên làm việc với sứ mệnh tạo ra những phòng hát với giá trị phù hợp  nhất với chủ đầu tư.</p>
                <h4> * Tầm nhìn chiến lược</h4>
                <p>Với 4 năm kinh nghiệm trong công việc, cùng sự góp ý của các quý chủ đầu tư, chúng tôi sẽ cố gắng hoàn thiện kĩ năng và tay nghề. Trong tương lai, có thể mở rông quy mô công ty. Mang thương hiệu công ty đến mọi miền tổ quốc</p>
                <h4> * Một số chỉ thị của ban giám đốc</h4>
                <blockquote>Không quyết liệt, mọi việc sẽ làng nhàng</blockquote>
                <blockquote>Khách hàng là thượng đế</blockquote>
                <blockquote> Bạn có thể làm điều đó, và chúng tôi có thể giúp</blockquote>
                <h4> * Lĩnh vực hoạt động</h4>
                <ul>
                    <li> - <strong>Thiết kế phòng karaoke</strong></li>
                    <li> - <strong>Thi công phòng karaoke</strong></li>
                    <li> - <strong>Cung cấp mẫu phòng karaoke</strong></li>
                </ul>
                <h4> * Hình ảnh về công ty</h4>
                <div id="blueimp-gallery" class="blueimp-gallery">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                    <div class="modal fade">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body next"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left prev">
                                        <i class="glyphicon glyphicon-chevron-left"></i>
                                        Previous
                                    </button>
                                    <button type="button" class="btn btn-primary next">
                                        Next
                                        <i class="glyphicon glyphicon-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="link" class="text-center">
                <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <a href="images/gioithieu/tong-giam-doc.jpg" title="Tổng giám đốc" data-gallery>
                                <figure>
                                <img src="images/gioithieu/tong-giam-doc.jpg" class="img-thumbnail" alt="Tổng giám đốc"><br>
                                <figcation>Tổng giám đốc:  Trần Văn Thăng</figcation>
                                </figure>
                            </a>
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <a href="images/gioithieu/chu-tich.jpg" title="Chủ tịch" data-gallery>
                            <figure>
                                <img src="images/gioithieu/chu-tich.jpg" class="img-thumbnail" alt="Chủ tịch"><br>
                                <figcation>Chủ tịch: Nguyễn Văn Cương</figcation>
                            </figure>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <a href="images/gioithieu/pho-giam-doc.jpg" title="Phó giám đốc" data-gallery>
                            <figure>
                                <img src="images/gioithieu/pho-giam-doc.jpg" class="img-thumbnail" alt="Phó giám đốc"><br>
                                <figcation>Phó giám đốc: Trần Văn Thiêm</figcation>
                            </figure>
                        </a>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                        <a href="images/gioithieu/nhan-vien.jpg" title="Nhân viên" data-gallery>
                            <figure>
                                <img src="images/gioithieu/nhan-vien.jpg" class="img-thumbnail" alt="Nhân viên"><br>
                                <figcation>Anh em nhân viên công ty</figcation>
                            </figure>
                        </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <a href="images/gioithieu/xuong-san-xuat" title="Xưởng sản xuất" data-gallery>
                                <figure>
                                    <img src="images/gioithieu/xuong-san-xuat.jpg" class="img-thumbnail" alt="Xưởng sản xuất"><br>
                                    <figcation>Xưởng sản xuất</figcation>
                                </figure>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <a href="images/gioithieu/van-phong.jpg" title="Văn phòng" data-gallery>
                                <figure>
                                    <img src="images/gioithieu/van-phong.jpg" class="img-thumbnail" alt="Văn phòng"><br>
                                    <figcation>Văn phòng</figcation>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <a href="images/gioithieu/mot-goc-lam-viec.jpg" title="Một góc làm việc" data-gallery>
                                <figure>
                                    <img src="images/gioithieu/mot-goc-lam-viec.jpg" class="img-thumbnail" alt="Một góc làm việc"><br>
                                    <figcation>Một góc công ty</figcation>
                                </figure>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <a href="images/gioithieu/sap-xe-di-cong-trinh" title="Sếp xe đi công trình" data-gallery>
                                <figure>
                                    <img src="images/gioithieu/sap-xe-di-cong-trinh.jpg" class="img-thumbnail" alt="Sếp xe đi công trình"><br>
                                    <figcation>Sếp xe đi công trình</figcation>
                                </figure>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <a href="images/gioithieu/may-moc.jpg" title="Máy móc" data-gallery>
                                <figure>
                                    <img src="images/gioithieu/may-moc.jpg" class="img-thumbnail" alt="Máy móc"><br>
                                    <figcation>Máy móc</figcation>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <h4>Liên hệ</h4>
                <p>Hotline: 0976 094 111</p>
                <p>Thiết kế: 01656 088 717</p>
                <p>Chăm sóc khách hàng: 01656 2300 004</p>
                <p>Email: thietkenoithathc@gmail.com</p>
                <p>Youtube: thietkenoithathc@gmail.com</p>
                <p>Facebook: https://www.facebook.com/phongkaraoke</p>
                <h4>Bản đồ</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9559872052773!2d105.73950131542337!3d21.034446992959058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454960505c231%3A0xc8e2b285be495030!2zVGhpIGPDtG5nIHRoaeG6v3Qga-G6vyBQaMOybmcga2FyYW9rZQ!5e0!3m2!1svi!2s!4v1460459629911" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </article>
            <section class="bgwhite cungchuyenmuc">
                <h4>Bai viet cung chuyen muc</h4>
                <ul>
                    <li><a href="">Noi that karaoke</a></li>
                </ul>
            </section>
            <section class="bgwhite">
                <h4>Hãy để lại bình luộn để chúng tôi được hỗ trợ!</h4>
                <div class="fb-comments" data-href="{{ route('gioithieu') }}/?id=abc" data-width="100%" data-numposts="5"></div>
            </section>
        </section>
@include('partials.aside')
    </section>
</section>
</section>
@stop
@section('body.js.gallery')
<script src="js/jquery.blueimp-gallery.min.js"></script>
@stop
