@extends('layouts.master')
@section('head.title') Báo giá phòng karaoke @stop
@section('head.mota') Nội thất HC đưa ra báo giá phòng karaoke, giá trọn gói phòng karaoke, báo giá chi tiết phòng karaoke @stop
@section('head.keywords') bao gia phong karaoke, bao gia tron goi phong karaoke, bao gia chi tiet phong karaoke @stop
@section('head.robots'){{ ROBOTS }}@stop
@section('head.ogurl'){{ route('baogia') }}@stop
@section('head.ogtype'){{ ARTICLE }}@stop
@section('head.ogimage') @stop
@section('head.css.gallery')
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
@stop
@section('body.content')
    <section class="main container">
        <section class="row">
            <section class="col-md-9">
                <article class="bgwhite">
                    <h1>Báo giá phòng karaoke</h1>
                    <div class="fb-like" data-href="{{ route('baogia') }}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                    <p>Hiện nay, nhiều chủ đầu tư còn thắc về báo giá phòng karaoke. Nội thất karaoke đưa ra báo giá và báo giá chi tiết để quý chủ đầu tư có thể hiểu được.
                    Chúng tôi là đơn vị thiết kế và thi công phòng karaoke trọn gói.</p>
                    <h4>Thế nào là trọn gói?</h4>
                    <p>Trọn gói ở đây là tất cả nội thất phòng karaoke trừ tivi điều hòa và âm thanh. Thông thường nội thất phòng karaoke bao gồm:
                    <ul>
                        <li> - Bàn ghế, có các loại bàn inox mini bar, bàn kính, bàn kính hoa văn, bàn kính 3d. Ghế sofa bọc da</li>
                        <li> - Cách âm gồm  các lớp: cao su non, túi khí, gỗ mdf 5mm, bông thủy tính, xốp, khung xương Vĩnh Tường, rockwool, bông khoáng...( tùy vào yêu cầu cách âm của chủ đầu tư)</li>
                        <li> - Vật liệu trang trí: kính phản quang, kính cường lực, nhung, da, nỉ, đá mosai, tranh kính 3d, hắt sâu vô tận, giấy gián tường...</li>
                        <li> - Ánh sáng cảm biến theo nhạc, nháy theo nhac, đèn lazer, led p10,...</li>
                        <li> - Hệ thống điện, hệ thống cấp thoát khí, bục sân khấu, bục tôn nền,...</li>
                    </ul>
                    Về cách âm và tiêu âm có các lớp cách âm và các vật liệu trang trí để tiêu âm.
                    </p>
                    <h4>Giá tính như thế nào?</h4>
                    <p>Giá trọn gói phòng karaoke tính theo m2. Ví dụ 6 triệu 1m2. Phòng có diện tích sàn là 25m2, thì giá là 6X25=155 triệu. Mức giá thấp nhất mà chúng tôi đang thi công là 5 triệu.</p>
                    <h4>Tại sao giá thấp nhất là 5 triệu trên 1m2 ?</h4>
                    <p>Với phương châm tạo ra những phòng karaoke chất lượng hiện đại, chúng tôi đưa ra mức giá thấp nhất để khi hoàn thiện phòng karaoke của quý chủ đầu tư phải hơn hoặc bằng các chủ đầu tư khác ở lân cận.</p>
                    <h4>Tại sao trọn gói lại không bao gồm âm thanh tivi điều hòa?</h4>
                    <p>Có các lý do sau mà chúng tôi không cho vào trọn gói:</p>
                    <li> - Các phòng karaoke nâng cấp sẽ tận dụng được tivi âm thanh điều hòa</li>
                    <li> - Thông thường chủ đầu tư sẽ tự lựa chọn thương hiệu hoặc kích thước tivi âm thanh điều hòa và lắp đặt tại các đơn vị ở địa phương.</li>
                    <h4>Công ty có cung cấp âm thanh tivi điều hòa không?</h4>
                    <p>Có. Chúng tôi có các đơn vị đối tác là những đơn vị setup âm thanh chuyên nghiệp, đơn vị chuyên lắp đặt tivi và điều hòa.</p>
                    <p style="font-size:18px; ">
                        Khi hợp tác với chúng tôi, sẽ có  các mẫu 3D và chúng tôi sẽ thi công như mẫu 3d mà quý chủ đầu tư chọn.
                        Trên đây là những câu hỏi thường các chủ đâu tư hay thắc mắc. Chúng tôi rất hân hạnh được giải đáp thắc mắc của quý vị.</p>
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
