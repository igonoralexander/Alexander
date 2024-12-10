<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('pageTitle')</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
    <link rel="icon" href="{{ asset('storage/' . $favicon) }}" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{ asset ('backend/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{asset ('backend/assets/css/fonts.min.css') }}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('backend/assets/css/plugins.min.css') }}" />

    @stack('styles')

    @livewireStyles

    @yield('style')


    <link rel="stylesheet" href="{{ asset ('backend/assets/css/kaiadmin.min.css') }}" />


  </head>
  <body>
    <div class="wrapper">

        @include('layouts.backend.inc.sidebar')

      <div class="main-panel">

        @include('layouts.backend.inc.header')

        @yield('content')
        
        @include('layouts.backend.inc.footer')
      </div>

    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset ('backend/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset ('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset ('backend/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset ('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset ('backend/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset ('backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset ('backend/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset ('backend/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset ('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset ('backend/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset ('backend/assets/js/plugin/jsvectormap/world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset ('backend/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

   
    @stack('scripts')
  	@livewireScripts

    @yield('script')

    <!-- Kaiadmin JS -->
    <script src="{{ asset ('backend/assets/js/kaiadmin.min.js') }}"></script>

    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });

    </script>
  </body>
</html>