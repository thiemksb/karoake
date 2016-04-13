<header class="header">
    <nav class="navbar" style="margin-bottom:0px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">TC Group</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nội thất phòng karaoke <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('noithat.ban') }}">Bàn karaoke - Bàn mini bar</a></li>
                            <li><a href="{{ route('noithat.ghe') }}">Ghế sofa - Ghế phòng karaoke</a></li>
                            <li><a href="{{ route('noithat.tieuamcacham') }}">Vật liệu cách âm - tiêu âm</a></li>
                            <li><a href="{{ route('noithat.trangtri') }}">Vật liệu trang trí</a></li>
                            <li><a href="{{ route('noithat.anhsang') }}">Ánh sáng cảm biến theo nhạc</a></li>
                            <li><a href="{{ route('noithat.amthanhtividieuhoa') }}">Âm thanh phòng karaoke - tivi - điều hòa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tư vấn<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('linhvuc.noithat') }}">Nội thất phòng karaoke</a></li>
                            <li><a href="{{ route('linhvuc.thicong') }}">Thi công phòng karaoke</a></li>
                            <li><a href="{{ route('linhvuc.thietke') }}">Thiết kế phòng karaoke</a></li>
                            <li><a href="{{ route('linhvuc.mauphong') }}">Mẫu phòng karaoke</a></li>
                            <li><a href="{{ route('linhvuc.nangcap') }}">Nâng cấp phòng karaoke</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('video') }}">Video</a></li>
                    <li><a href="{{ route('hinhanh') }}">Ảnh</a></li>
                    <li><a href="{{ route('congtrinh') }}">Công trình</a></li>
                    <li><a href="{{ route('baogia') }}">Báo giá</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="padding: 2px;" href="tel:+84976094111"><span class="glyphicon glyphicon-earphone"></span> 0976 094 111</a>
                        <a style="padding: 2px;" href="tel:+841656088717"><span class="glyphicon glyphicon-earphone"></span> 01656 088 717</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>