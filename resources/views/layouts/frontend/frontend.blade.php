<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>{{ $seometa->meta_title ?? 'Alexander Igonor' }}</title>
     <meta name="keywords" content = "{{ $seometa->meta_keywords ?? null }}">
    <meta name="description" content="{{ $seometa->meta_description ?? null }}">

    <meta name="author" content="themesflat.com">
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

    <!-- modalDemo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h5 class="demo-title">Ultimate HTML Theme</h5>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-01.jpg" src="images/demo/home-01.jpg" alt="home-01">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span>Trend</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 01</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-multi-brand.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-multi-brand.jpg" src="images/demo/home-multi-brand.jpg" alt="home-multi-brand">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Multi Brand</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-02.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-02.jpg" src="images/demo/home-02.jpg" alt="home-02">
                                    <div class="demo-label">
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 02</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-03.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-03.jpg" src="images/demo/home-03.jpg" alt="home-03">
                                </div>
                                <span class="demo-name">Home Fashion 03</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-04.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-04.jpg" src="images/demo/home-04.jpg" alt="home-04">
                                </div>
                                <span class="demo-name">Home Fashion 04</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-05.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-05.jpg" src="images/demo/home-05.jpg" alt="home-05">
                                </div>
                                <span class="demo-name">Home Fashion 05</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-06.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-06.jpg" src="images/demo/home-06.jpg" alt="home-06">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 06</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-07.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-07.jpg" src="images/demo/home-07.jpg" alt="home-07">
                                </div>
                                <span class="demo-name">Home Fashion 07</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-08.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-08.jpg" src="images/demo/home-08.jpg" alt="home-08">
                                </div>
                                <span class="demo-name">Home Fashion 08</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-skincare.jpg" src="images/demo/home-skincare.jpg" alt="home-skincare">
                                </div>
                                <span class="demo-name">Home Skincare</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-headphone.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-headphone.jpg" src="images/demo/home-headphone.jpg" alt="home-headphone">
                                </div>
                                <span class="demo-name">Home Headphone</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-giftcard.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-giftcard.jpg" src="images/demo/home-giftcard.jpg" alt="home-gift-card">
                                </div>
                                <span class="demo-name">Home Gift Card</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-furniture.jpg" src="images/demo/home-furniture.jpg" alt="home-furniture">
                                </div>
                                <span class="demo-name">Home Furniture</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture-02.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-furniture2.jpg" src="images/demo/home-furniture2.jpg" alt="home-furniture-2">
                                </div>
                                <span class="demo-name">Home Furniture 2</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skateboard.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-skateboard.jpg" src="images/demo/home-skateboard.jpg" alt="home-skateboard">
                                </div>
                                <span class="demo-name">Home Skateboard</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-stroller.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-stroller.jpg" src="images/demo/home-stroller.jpg" alt="home-stroller">
                                </div>
                                <span class="demo-name">Home Stroller</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-decor.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-decor.jpg" src="images/demo/home-decor.jpg" alt="home-decor">
                                </div>
                                <span class="demo-name">Home Decor</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-electronic.jpg" src="images/demo/home-electronic.jpg" alt="home-electronic">
                                </div>
                                <span class="demo-name">Home Electronic</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-setup-gear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-setup-gear.jpg" src="images/demo/home-setup-gear.jpg" alt="home-setup-gear">
                                </div>
                                <span class="demo-name">Home Setup Gear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-dog-accessories.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-dog-accessories.jpg" src="images/demo/home-dog-accessories.jpg" alt="home-dog-accessories">
                                </div>
                                <span class="demo-name">Home Dog Accessories</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-kitchen-wear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-kitchen.jpg" src="images/demo/home-kitchen.jpg" alt="home-kitchen-wear">
                                </div>
                                <span class="demo-name">Home Kitchen Wear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-phonecase.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-phonecase.jpg" src="images/demo/home-phonecase.jpg" alt="home-phonecase">
                                </div>
                                <span class="demo-name">Home Phonecase</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-paddle-boards.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home_paddle_board.jpg" src="images/demo/home_paddle_board.jpg" alt="home-paddle_board">
                                </div>
                                <span class="demo-name">Home Paddle Boards</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-glasses.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-glasses.jpg" src="images/demo/home-glasses.jpg" alt="home-glasses">
                                </div>
                                <span class="demo-name">Home Glasses</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pod-store.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-pod-store.jpg" src="images/demo/home-pod-store.jpg" alt="home-pod-store">
                                </div>
                                <span class="demo-name">Home POD Store</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-activewear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-activewear.jpg" src="images/demo/home-activewear.jpg" alt="home-activewear">
                                </div>
                                <span class="demo-name">Activewear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-handbag.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-handbag.jpg" src="images/demo/home-handbag.jpg" alt="home-handbag">
                                </div>
                                <span class="demo-name">Home Handbag</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-tee.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-tee.jpg" src="images/demo/home-tee.jpg" alt="home-tee">
                                </div>
                                <span class="demo-name">Home Tee</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sock.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-socks.jpg" src="images/demo/home-socks.jpg" alt="home-sock">
                                </div>
                                <span class="demo-name">Home Sock</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewerly.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-jewelry.jpg" src="images/demo/home-jewelry.jpg" alt="home-jewelry">
                                </div>
                                <span class="demo-name">Home Jewelry</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sneaker.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-sneaker.jpg" src="images/demo/home-sneaker.jpg" alt="home-sneaker">
                                </div>
                                <span class="demo-name">Home Sneaker</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-accessories.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-accessories.jpg" src="images/demo/home-accessories.jpg" alt="home-accessories">
                                </div>
                                <span class="demo-name">Home Accessories</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-grocery.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-gocery.jpg" src="images/demo/home-gocery.jpg" alt="home-grocery">
                                </div>
                                <span class="demo-name">Home Grocery</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-baby.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-baby.jpg" src="images/demo/home-baby.jpg" alt="home-baby">
                                </div>
                                <span class="demo-name">Home Baby</span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div> 
        </div>
    </div>
    <!-- /modalDemo -->

    @include('layouts.frontend.inc.mobile-menu')


    <!-- canvasSearch -->
    <div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
        <div class="canvas-wrapper">
            <header class="tf-search-head">
                <div class="title fw-5">
                    Search our site
                    <div class="close">
                        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                    </div>
                </div>
                <div class="tf-search-sticky">
                    <form class="tf-mini-search-frm">
                        <fieldset class="text">
                            <input type="text" placeholder="Search" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                        </fieldset>
                        <button class="" type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </header>
            <div class="canvas-body p-0">
                <div class="tf-search-content">
                    <div class="tf-cart-hide-has-results">
                        <div class="tf-col-quicklink">
                            <div class="tf-search-content-title fw-5">Quick link</div>
                            <ul class="tf-quicklink-list">
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Fashion</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Men</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Women</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Accessories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tf-col-content">
                            <div class="tf-search-content-title fw-5">Need some inspiration?</div>
                            <div class="tf-search-hidden-inner">
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Cotton jersey top</a>
                                        <div class="tf-product-info-price">
                                            <div class="compare-at-price">$10.00</div>
                                            <div class="price-on-sale fw-6">$8.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Mini crossbody bag</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Oversized Printed T-shirt</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /canvasSearch -->

    <!-- toolbarShopmb -->
    <div class="offcanvas offcanvas-start canvas-mb toolbar-shop-mobile" id="toolbarShopmb">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        <a href="/" class="tf-category-link mb-menu-link">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="/about" class="tf-category-link mb-menu-link">
                            <span>About Me</span>
                        </a>
                    </li>

                    <div class="mb-bottom">
                        <a href="{{ route('file.download', ['filename' => 'resume.pdf']) }}" class="tf-btn fw-5 btn-line">Download CV<i class="icon icon-arrow1-top-left"></i></a>
                    </div>

                </ul>
            </div>
        </div>       
    </div>
    <!-- /toolbarShopmb -->

    <!-- modal login -->
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Log in</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="" action="my-account.html" accept-charset="utf-8">
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="password"  name="">
                            <label class="tf-field-label" for="">Password *</label>
                        </div>
                        <div>
                            <a href="#forgotPassword" data-bs-toggle="modal" class="btn-link link">Forgot your password?</a>
                        </div>
                        <div class="bottom"> 
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Log in</span></button>
                            </div>
                            <div class="w-100">
                                <a href="#register" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                    New customer? Create your account
                                    <i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalCentered fade form-sign-in modal-part-content" id="forgotPassword">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Reset your password</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="">
                        <div>
                            <p>Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails</p>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div>
                            <a href="#login" data-bs-toggle="modal" class="btn-link link">Cancel</a>
                        </div>
                        <div class="bottom"> 
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Reset password</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalCentered fade form-sign-in modal-part-content" id="register">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Register</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="">
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="text"  name="">
                            <label class="tf-field-label" for="">First name</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="text"  name="">
                            <label class="tf-field-label" for="">Last name</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="password"  name="">
                            <label class="tf-field-label" for="">Password *</label>
                        </div>
                        <div class="bottom"> 
                            <div class="w-100">
                                <a href="register.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Register</span></a>
                            </div>
                            <div class="w-100">
                                <a href="#login" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                    Already have an account? Log in here
                                    <i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal login -->


    <!-- modal quick_view -->
    <div class="modal fade modalDemo" id="quick_view">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="tf-product-media-wrap">
                        <div dir="ltr" class="swiper tf-single-slide">
                            <div class="swiper-wrapper" >
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="images/products/orange-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="images/products/pink-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next button-style-arrow single-slide-prev"></div>
                            <div class="swiper-button-prev button-style-arrow single-slide-next"></div>
                        </div>
                    </div>
                    <div class="tf-product-info-wrap position-relative">
                        <div class="tf-product-info-list">
                            <div class="tf-product-info-title">
                                <h5><a class="link" href="product-detail.html">Ribbed Tank Top</a></h5>
                            </div>
                            <div class="tf-product-info-badges">
                                <div class="badges text-uppercase">Best seller</div>
                                <div class="product-status-content">
                                    <i class="icon-lightning"></i>
                                    <p class="fw-6">Selling fast! 48 people have this in their carts.</p>
                                </div>
                            </div>
                            <div class="tf-product-info-price">
                                <div class="price">$18.00</div>
                            </div>
                            <div class="tf-product-description">
                                <p>Nunc arcu faucibus a et lorem eu a mauris adipiscing conubia ac aptent ligula facilisis a auctor habitant parturient a a.Interdum fermentum.</p>
                            </div>
                            <div class="tf-product-info-variant-picker">
                                <div class="variant-picker-item">
                                    <div class="variant-picker-label">
                                        Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input id="values-orange-1" type="radio" name="color-1" checked>
                                        <label class="hover-tooltip radius-60" for="values-orange-1" data-value="Orange">
                                            <span class="btn-checkbox bg-color-orange"></span>
                                            <span class="tooltip">Orange</span>
                                        </label>
                                        <input id="values-black-1" type="radio" name="color-1">
                                        <label class=" hover-tooltip radius-60" for="values-black-1" data-value="Black">
                                            <span class="btn-checkbox bg-color-black"></span>
                                            <span class="tooltip">Black</span>
                                        </label>
                                        <input id="values-white-1" type="radio" name="color-1">
                                        <label class="hover-tooltip radius-60" for="values-white-1" data-value="White">
                                            <span class="btn-checkbox bg-color-white"></span>
                                            <span class="tooltip">White</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="variant-picker-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="variant-picker-label">
                                            Size: <span class="fw-6 variant-picker-label-value">S</span>
                                        </div>
                                        <div class="find-size btn-choose-size fw-6">Find your size</div>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input type="radio" name="size-1" id="values-s-1" checked>
                                        <label class="style-text" for="values-s-1" data-value="S">
                                            <p>S</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-m-1">
                                        <label class="style-text" for="values-m-1" data-value="M">
                                            <p>M</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-l-1">
                                        <label class="style-text" for="values-l-1" data-value="L">
                                            <p>L</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-xl-1">
                                        <label class="style-text" for="values-xl-1" data-value="XL">
                                            <p>XL</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="quantity-title fw-6">Quantity</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity minus-btn">-</span>
                                    <input type="text" name="number" value="1">
                                    <span class="btn-quantity plus-btn">+</span>
                                </div>
                            </div>
                            <div class="tf-product-info-buy-button">
                                <form class="">
                                    <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price">$8.00</span></a>
                                    <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <div class="w-100">
                                        <a href="#" class="btns-full">Buy with <img src="images/payments/paypal.png" alt=""></a>
                                        <a href="#" class="payment-more-option">More payment options</a>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <a href="product-detail.html" class="tf-btn fw-6 btn-line">View full details<i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_view -->



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