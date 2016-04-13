<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('head.title')</title>
    <meta name="desciption" content="@yield('head.mota')">
    <meta name="keywords" content="@yield('head.keywords')">
    <meta name="robots" content="@yield('head.robots')">
    <meta property="og:site_name" content="Karaoke KC">
    <meta property="og:type" content="@yield('head.ogtype')">
    <meta property="og:title" content="@yield('head.title')">
    <meta property="og:description" content="@yield('head.mota')">
    <meta property="og:url" content="@yield('head.ogurl')">
    <meta property="og:image" content="@yield('head.ogimage')">
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:app_id" content="262664807408515">
    <meta property="fb:admins" content="100008897203300">
    <link rel="canonical" href="@yield('head.ogurl')">
    <link rel="author" href="https://plus.google.com/u/0/111729679197830466299/posts"/>
    <link rel="publisher" href=""/>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('head.css.slide')
    @yield('head.css.gallery')
</head>
<body>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '262664807408515',
            xfbml      : true,
            version    : 'v2.5'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@include('partials.header')

@yield('body.content')

@include('partials.footer')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('body.js.slide')
@yield('body.js.gallery')
</body>
</html>