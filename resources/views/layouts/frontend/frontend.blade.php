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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.gstatic.com/s/albertsans/v1/i7dOIFdwYjGaAMFtZd_QA1ZbYFc.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://fonts.gstatic.com/s/youngserif/v2/3qTpojO2nS2VtkB3KtkQZ1t93kY.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://fonts.gstatic.com/s/poppins/v21/pxiGyp8kv8JHgFVrJJLucHtA.woff2" as="font" type="font/woff2" crossorigin>
   @include('layouts.frontend.inc.canonical')
   <!-- Icons -->
   <link rel="stylesheet" href="{{ asset ('frontend/fonts/font-icons.css') }}">
   <link rel="stylesheet" href="{{ asset ('frontend/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset ('frontend/css/swiper-bundle.min.css') }}">
   <link rel="stylesheet" href="{{ asset ('frontend/css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset ('frontend/css/bootstrap-select.min.css') }}">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


   <!-- Critical CSS (inlined to render above-the-fold quickly) -->
   <style>
       :root{--bg:#ffffff}
       *,*::before,*::after{box-sizing:border-box}
       html,body{height:100%}
       body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif;background:var(--bg);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
       /* Minimal critical styles for header/loader and basic layout */
       .preload{display:block}
       #wrapper{min-height:100vh}
    </style>
     <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">

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
    <script defer src="{{ asset('frontend/js/vendor.bundle.js') }}"></script>
    <script defer src="{{ asset('frontend/js/frontend.bundle.js') }}"></script>
</body>

</html>
