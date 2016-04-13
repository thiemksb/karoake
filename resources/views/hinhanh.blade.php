@extends('layouts.master')
@section('head.title')
    Hình ảnh - Thiết kế thi công phòng karaoke
@stop
@section('head.css.gallery')
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
@stop
@section('body.content')
<section class="gallery container-fluid">
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

<div class="row">
    <h1 class="text-center bgwhite">Ảnh thi công phòng karaoke thực tế</h1>
    <div id="link" class="text-center">
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
    </div>
</div>
<div class="row">
    <h1 class="text-center bgwhite">Ảnh phong karaoke hoàn thiện</h1>
    <div id="link" class="text-center">
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
    </div>
</div>
<div class="row">
    <h1 class="text-center bgwhite">Mẫu 3d phòng karaoke</h1>
    <div id="link" class="text-center">
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="images/1.jpg" title="Banana" data-gallery>
                <img src="images/1.jpg" class="img-thumbnail" alt="Banana">
            </a>
        </div>
    </div>
</div>
</section>
@stop
@section('body.js.gallery')
<script src="js/jquery.blueimp-gallery.min.js"></script>
@stop
