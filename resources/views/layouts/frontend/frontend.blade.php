<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>{{ $seometa->meta_title ?? View::yieldContent('pageTitle', 'Default Page Title') }}</title>
     <meta name="keywords" content = "{{ $seometa->meta_keywords ?? null }}">
    <meta name="description" content="{{ $seometa->meta_description ?? null }}">

    <meta name="author" content="Alexander Igonor">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
   <!-- font -->
   <link rel="stylesheet" href="{{ asset ('frontend/fonts/fonts.css') }}">
   <!-- Icons -->
   <link rel="stylesheet" href="{{ asset ('frontend/fonts/font-icons.css') }}">
   <link rel="stylesheet" href="{{ asset ('frontend/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset ('frontend/css/swiper-bundle.min.css') }}">
   <link rel="stylesheet" href="{{ asset ('frontend/css/animate.css') }}">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


   <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/styles.css') }}"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('storage/' . $favicon) }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('storage/' . $favicon) }}">

</head>

<body class="preload-wrapper">
    <!-- RTL -->
    <!-- <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a> -->
    <!-- /RTL  -->
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        
        @include('layouts.frontend.inc.announcement')

        @include('layouts.frontend.inc.header')

        @yield('content')

        @include('layouts.frontend.inc.footer')

    </div>

    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /gotop -->
    
    @include('layouts.frontend.inc.toolbar-bottom')

    @include('layouts.frontend.inc.mobile-menu')

    @include('layouts.frontend.inc.toolbar-side')

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/lazysize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/count-down.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/multiple-modal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>