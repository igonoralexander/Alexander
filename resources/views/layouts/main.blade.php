<!DOCTYPE html>
<html lang="en">
    <head>
        <met#aeb3b8et="utf-8">
        <title>@yield('pageTitle')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Alexander, Alexander O Igonor, Igonor, Igonor O Alexander, Portfolio" name="keywords">
        <meta content="Alexander Oshiobugieh Igonor" name="description">

        <!-- Favicon -->
        <link href="{{asset ('ig/img/favicon.ico') }}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('ig/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('ig/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('ig/lib/animate/animate.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('ig/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('ig/css/style.css')}}" rel="stylesheet">
        
        <style>
            .whatsapp-chat
                {
                    bottom: 30px;
                    left: 10px;
                    position: fixed;
                }
        </style>


    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <div class="container">
            <div class="row g-5">
               @yield('content')
            </div>
        </div>

 
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <div class="whatsapp-chat">
            <a href = "https://wa.me/+2349070111277?text=I'm%20interested%20in%20designing%20a%20website." target = "_blank">
                <img src = "{{asset ('ig/img/whatsapp.png') }}" alt = "whatsapp-logo" height = "70px" width = "70px">
            </a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('ig/lib/wow/wow.min.js' ) }}"></script>
        <script src="{{asset('ig/lib/typed/typed.min.js' ) }}"></script>
        <script src="{{asset('ig/lib/easing/easing.min.js' ) }}"></script>
        <script src="{{asset('ig/lib/waypoints/waypoints.min.js' ) }}"></script>
        <script src="{{asset('ig/lib/counterup/counterup.min.js' ) }}"></script>
        <script src="{{asset('ig/lib/owlcarousel/owl.carousel.min.js' ) }}"></script>
        <script src="{{asset('ig/lib/isotope/isotope.pkgd.min.js' ) }}"></script>
        <script src="{{asset('ig/lib/lightbox/js/lightbox.min.js' ) }}"></script>

        <!-- Contact Javascript File -->
        <script src="{{asset('ig/mail/jqBootstrapValidation.min.js' ) }}"></script>
        <script src="{{asset('ig/mail/contact.js' ) }}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('ig/js/main.js' ) }}"></script>
    </body>
</html>
