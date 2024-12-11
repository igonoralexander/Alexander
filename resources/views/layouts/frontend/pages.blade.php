<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11011902529"></script>
    
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-11011902529');
    </script>

    <script>
        (function (c, s, q, u, a, r, e) {
            c.hj=c.hj||function(){(c.hj.q=c.hj.q||[]).push(arguments)};
            c._hjSettings = { hjid: a };
            r = s.getElementsByTagName('head')[0];
            e = s.createElement('script');
            e.async = true;
            e.src = q + c._hjSettings.hjid + u;
            r.appendChild(e);
        })(window, document, 'https://static.hj.contentsquare.net/c/csq-', '.js', 5230184);
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-336GFKWVYM"></script>
    
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-336GFKWVYM');
    </script>

    <script>
        (function (c, s, q, u, a, r, e) {
            c.hj=c.hj||function(){(c.hj.q=c.hj.q||[]).push(arguments)};
            c._hjSettings = { hjid: a };
            r = s.getElementsByTagName('head')[0];
            e = s.createElement('script');
            e.async = true;
            e.src = q + c._hjSettings.hjid + u;
            r.appendChild(e);
        })(window, document, 'https://static.hj.contentsquare.net/c/csq-', '.js', 5230184);
    </script>

    <meta charset="utf-8">
    <title>{{ $seometa->meta_title }}</title>
    <meta name="description" content="{{ $seometa->meta_description }}">
    <meta name="keywords" content="{{ $seometa->meta_keywords }}">
    <meta name="google-adsense-account" content="ca-pub-1139729314065943">

    <link rel="shortcut icon" href="{{ asset('storage/' . $favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('storage/' . $favicon) }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://igsoftware.com.ng/projects">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link href="{{ asset ('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset ('frontend/css/style.css') }}" rel="stylesheet">
    <link rel="preload" href="{{ asset ('/frontend/fonts/JustSignatureRegular.woff') }}" as="font" type="font/woff2" crossorigin="anonymous">
    
    <link href="{{ asset ('frontend/css/footer.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <!-- Responsive File -->
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">

    <!-- Defer loading of non-critical CSS with media="print" -->
    <link href="{{ asset('frontend/css/owl.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('frontend/css/fontawesome-all.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('frontend/css/jquery-ui.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('frontend/css/scrollbar.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('frontend/css/hover.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('frontend/css/flaticon.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">

    @yield('style')

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

        @include('layouts.frontend.inc.header')

        @include('layouts.frontend.inc.whatsapp') 
        
        @yield('content')

        @include('partials.cookie')

        @include('partials.newsletter')

        @include('layouts.frontend.inc.index-footer')
      
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>


    <!-- Essential for layout and initial functionality -->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

    <!-- Non-critical scripts (deferred loading) -->
    <script src="{{ asset('frontend/js/jquery-ui.js') }}" defer></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.js') }}" defer></script>
    <script src="{{ asset('frontend/js/owl.js') }}" defer></script>
    <script src="{{ asset('frontend/js/appear.js') }}" defer></script>
    <script src="{{ asset('frontend/js/wow.js') }}" defer></script>
    <script src="{{ asset('frontend/js/scrollbar.js') }}" defer></script>
    <script src="{{ asset('frontend/js/validate.js') }}" defer></script>
    <script src="{{ asset('frontend/js/mixitup.js') }}" defer></script>
    <script src="{{ asset('frontend/js/paroller.js') }}" defer></script>
    <script src="{{ asset('frontend/js/newsletter-consent.js') }}" defer></script>
    <script src="{{ asset('frontend/js/cookie-consent.js') }}" defer></script>
    <script src="{{ asset('frontend/js/custom-script.js') }}" defer></script>

</body>
</html>