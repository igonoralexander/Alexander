@extends('layouts.frontend.frontend')

@section('style')
	<style>
     
	</style>
@endsection

@section('content')
     <!-- slider -->
     <div class="tf-slideshow slideshow-men slider-effect-fade position-relative">
            <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="false" data-auto-play="false" data-delay="2000" data-speed="1000">
                <div class="swiper-wrapper">

                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="images/slider/men-slide1.jpg" src="images/slider/men-slide1.jpg" alt="men-slideshow-01" >
                            <div class="lookbook-1">
                                <div class="lookbook-item item-2">
                                    <div class="inner">
                                        <div class="btn-group dropdown dropup dropdown-center">
                                            <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span></span>
                                            </button>
                                            <ul class="dropdown-menu p-0 border-0">
                                                <li>
                                                    <div class="lookbook-product">
                                                        <a href="product-detail.html" class="image">
                                                            <img class="lazyload" data-src="images/products/lb-men-1.jpg" src="images/products/lb-men-1.jpg" alt="">
                                                        </a>
                                                        <div class="content-wrap">
                                                            <div class="product-title">
                                                                <a href="#">Loose Fit Hoodie</a>
                                                            </div>
                                                            <div class="price">$20.00</div>
                                                        </div>
                                                        <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="wrap-pagination text-center">
                <div class="container">
                    <div class="box-nav-pagination justify-content-center">
                        <div class="nav-arr-default nav-next-slider navigation-next-slider">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="currentColor">
                                    <path d="M5.5 11L0 5.5L5.5 0L6.47625 0.97625L1.9525 5.5L6.47625 10.0238L5.5 11Z"></path>
                                  </svg>
                            </span>
                        </div>
                        <div class="dots-default sw-pagination-slider"></div>
                        <div class="nav-arr-default nav-prev-slider navigation-prev-slider">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="currentColor">
                                    <path d="M1.5 11L7 5.5L1.5 0L0.52375 0.97625L5.0475 5.5L0.52375 10.0238L1.5 11Z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /slider -->

        <!-- Countdown -->
        <section class="flat-spacing-10 bg_dark">
            <div class="container">
                <div class="tf-grid-layout md-col-2 align-items-center flat-wrap-countdown countdown-black">
                    <div class="tf-content-wrap-v2 wow fadeInUp" data-wow-delay="0s">
                        <h4 class="heading">One-Time Only</h4>
                        <p class="description">Special Offers You Can't Miss: These deals won't last forever!</p>
                        <a href="shop-collection-list.html" class="tf-btn btn-line">Shop now<i class="icon icon-arrow-right"></i></a>
                    </div>
                    <div class="tf-countdown-v2 wow fadeInUp" data-wow-delay="0s">
                        <div class="js-countdown" data-timer="8007500" data-labels="Days,Hours,Mins,Secs"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Countdown -->

        <!-- Categories -->
        <section class="flat-spacing-5 pb_0">
            <div class="container">
                <div class="flat-title">
                    <span class="title wow fadeInUp" data-wow-delay="0s">Categories you might like</span>
                </div>
                <div class="hover-sw-nav">
                    <div dir="ltr" class="swiper tf-sw-collection" data-preview="4" data-tablet="2" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-2 hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-collection-sub.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="images/collections/collection-42.jpg" src="images/collections/collection-42.jpg" alt="collection-img">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>Tops</span><i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-2 hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-collection-sub.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="images/collections/collection-43.jpg" src="images/collections/collection-43.jpg" alt="collection-img">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>Sweatshirts</span><i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-2 hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-collection-sub.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="images/collections/collection-44.jpg" src="images/collections/collection-44.jpg" alt="collection-img">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>Swim</span><i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-2 hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-collection-sub.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="images/collections/collection-45.jpg" src="images/collections/collection-45.jpg" alt="collection-img">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>Dresses</span><i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item style-2 hover-img">
                                    <div class="collection-inner">
                                        <a href="shop-collection-sub.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="images/collections/collection-46.jpg" src="images/collections/collection-46.jpg" alt="collection-img">
                                        </a>
                                        <div class="collection-content">
                                            <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>Cardigans</span><i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-collection box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-collection box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-collection justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Categories -->

        <!-- Collection -->
        <section class="flat-spacing-18">
            <div class="container">
                <div class="masonry-layout-v3 wow fadeInUp" data-wow-delay="0s">
                    <div class="item-1 collection-item style-2 hover-img">
                        <div class="collection-inner">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyload" data-src="images/collections/men_cls1.jpg" src="images/collections/men_cls1.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>Clothing</span><i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-2 collection-item style-2 hover-img">
                        <div class="collection-inner">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyload" data-src="images/collections/men_cls2.jpg" src="images/collections/men_cls2.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>Sneaker</span><i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-3 collection-item style-2 hover-img">
                        <div class="collection-inner">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyload" data-src="images/collections/men_cls3.jpg" src="images/collections/men_cls3.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>Accessories</span><i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-4 collection-item style-2 hover-img">
                        <div class="collection-inner">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyload" data-src="images/collections/men_cls4.jpg" src="images/collections/men_cls4.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-collection-sub.html" class="tf-btn collection-title hover-icon fs-15 rounded-full"><span>New Arrivals</span><i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Collection -->
         

        <!-- Sale Product -->
        <section class="flat-spacing-17">
            <div class="container">
                <div class="flat-animate-tab">
                    <ul class="widget-tab-3 style-2 d-flex justify-content-center wow fadeInUp" data-wow-delay="0s" role="tablist">
                        <li class="nav-tab-item" role="presentation">   
                            <a href="#bestSeller" class="active" data-bs-toggle="tab">Best Sellers</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#sale"  data-bs-toggle="tab">Sale</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#graphics" data-bs-toggle="tab">Graphics</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#jeans" data-bs-toggle="tab">Jeans</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="bestSeller" role="tabpanel">
                            <div class="grid-layout loadmore-item" data-grid="grid-4">
                                <!-- card product 1 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-5.jpg" src="images/products/black-5.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>3 sizes available</span>
                                        </div>
                                        <div class="on-sale-wrap text-end">
                                            <div class="on-sale-item">-31%</div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Regular Fit Oxford Shirt</a>
                                        <span class="price"><span class="old-price">$36.00</span> <span class="new-price">$25.00</span></span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Orange</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/dark-blue-2.jpg" src="images/products/dark-blue-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Beige</span>
                                                <span class="swatch-value bg_beige"></span>
                                                <img class="lazyload" data-src="images/products/beige.jpg" src="images/products/beige.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Blue</span>
                                                <span class="swatch-value bg_light-blue"></span>
                                                <img class="lazyload" data-src="images/products/light-blue.jpg" src="images/products/light-blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-7.jpg" src="images/products/white-7.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/light-green-2.jpg" src="images/products/light-green-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                       
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Sweatshirt</a>
                                        <span class="price">$25.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class="lazyload" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-3.jpg" src="images/products/black-3.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class="lazyload" data-src="images/products/blue.jpg" src="images/products/blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/dark-blue.jpg" src="images/products/dark-blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-6.jpg" src="images/products/white-6.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Grey</span>
                                                <span class="swatch-value bg_light-grey"></span>
                                                <img class="lazyload" data-src="images/products/light-grey.jpg" src="images/products/light-grey.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Hoodie</a>
                                        <span class="price">$10.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-7.jpg" src="images/products/black-7.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class="lazyload" data-src="images/products/blue-2.jpg" src="images/products/blue-2.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-10.jpg" src="images/products/black-10.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$20.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-9.jpg" src="images/products/white-9.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-18.jpg" src="images/products/black-18.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-19.jpg" src="images/products/black-19.jpg" alt="image-product">
                                        </a>
                                        <div class="sold-out">
                                            <span>Sold out</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Regular Fit Windbreaker</a>
                                        <span class="price">$114.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark sold-out"></span>
                                                <img class="lazyload" data-src="images/products/black-18.jpg" src="images/products/black-18.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white sold-out"></span>
                                                <img class="lazyload" data-src="images/products/white-13.jpg" src="images/products/white-13.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-20.jpg" src="images/products/black-20.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-21.jpg" src="images/products/black-21.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                        <div class="on-sale-wrap text-end">
                                            <div class="on-sale-item pre-order">Pre-Order</div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Regular Fit Polo Shirt</a>
                                        <span class="price">$135.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-20.jpg" src="images/products/black-20.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Taupe</span>
                                                <span class="swatch-value bg_taupe"></span>
                                                <img class="lazyload" data-src="images/products/taupe-1.jpg" src="images/products/taupe-1.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                        </a>
                                        <div class="sold-out">
                                            <span>Sold out</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Hoodie</a>
                                        <span class="price">$34.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark sold-out"></span>
                                                <img class="lazyload" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white sold-out"></span>
                                                <img class="lazyload" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-14.jpg" src="images/products/white-14.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/white-15.jpg" src="images/products/white-15.jpg" alt="image-product">
                                        </a>
                                        <div class="sold-out">
                                            <span>Sold out</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Regular Fit Linen-blend Shirt</a>
                                        <span class="price">$9.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white sold-out"></span>
                                                <img class="lazyload" data-src="images/products/white-14.jpg" src="images/products/white-14.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 9 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-23.jpg" src="images/products/black-23.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-22.jpg" src="images/products/black-22.jpg" alt="image-product">
                                        </a>
                                        <div class="sold-out">
                                            <span>Sold out</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Cotton Sweater</a>
                                        <span class="price">$31.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark sold-out"></span>
                                                <img class="lazyload" data-src="images/products/black-23.jpg" src="images/products/black-23.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white sold-out"></span>
                                                <img class="lazyload" data-src="images/products/white-16.jpg" src="images/products/white-16.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2 sold-out"></span>
                                                <img class="lazyload" data-src="images/products/blue-4.jpg" src="images/products/blue-4.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-pagination-wrap view-more-button text-center">
                                <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore "><span class="text">Load more</span></button>
                            </div>
                        </div>
                        <div class="tab-pane" id="sale" role="tabpanel">
                            <div class="grid-layout loadmore-item2" data-grid="grid-4">
                                <!-- card product 1 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/men-hoodie.jpg" src="images/products/men-hoodie.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/men-hoodie-2.jpg" src="images/products/men-hoodie-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">"It Is Finished" Bleach Wash Hoodie</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/hat.jpg" src="images/products/hat.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/hat-2.jpg" src="images/products/hat-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">"The Pack" Beanie</a>
                                        <span class="price">$39.00</span>
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt.jpg" src="images/products/t-shirt.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-2.jpg" src="images/products/t-shirt-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Amazing Grace Mineral Wash Premium Tee</a>
                                        <span class="price">$39.00</span>
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/men-hoodie-3.jpg" src="images/products/men-hoodie-3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/men-hoodie-4.jpg" src="images/products/men-hoodie-4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title">Oversized Printed T-shirt</a>
                                        <span class="price">$39.00</span>
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt-3.jpg" src="images/products/t-shirt-3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-4.jpg" src="images/products/t-shirt-4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">God Behind Bars "God's Purpose" Sand Tee</a>
                                        <span class="price">$38.00</span>
                                       
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/men-hoodie-5.jpg" src="images/products/men-hoodie-5.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/men-hoodie-6.jpg" src="images/products/men-hoodie-6.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Gratitude Hoodie</a>
                                        <span class="price">$48.00</span>
                                       
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt-5.jpg" src="images/products/t-shirt-5.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-6.jpg" src="images/products/t-shirt-6.jpg" alt="image-product">
                                        </a>
                                       
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Shein Ezwear Shoulder Tee</a>
                                        <span class="price">$39.00</span>
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt-7.jpg" src="images/products/t-shirt-7.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-8.jpg" src="images/products/t-shirt-8.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V.3 Mentality Tee</a>
                                        <span class="price">$39.00</span>
                                    </div>
                                </div>
                                <!-- card product 9 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/men-hoodie-7.jpg" src="images/products/men-hoodie-7.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/men-hoodie-8.jpg" src="images/products/men-hoodie-8.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Victory Crewneck</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                                <!-- card product 10 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt-9.jpg" src="images/products/t-shirt-9.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-10.jpg" src="images/products/t-shirt-10.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Y'all Tee - Black</a>
                                        <span class="price">$18.95</span>
                                       
                                    </div>
                                </div>
                                <!-- card product 11 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt-11.jpg" src="images/products/t-shirt-11.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-12.jpg" src="images/products/t-shirt-12.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Y'all Tee - Black</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                                <!-- card product 12 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt-13.jpg" src="images/products/t-shirt-13.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-14.jpg" src="images/products/t-shirt-14.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Y'all Tee - Blush</a>
                                        <span class="price">$38.00</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tf-pagination-wrap view-more-button2 text-center">
                                <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore2"><span class="text">Load more</span></button>
                            </div>
                        </div>
                        <div class="tab-pane" id="graphics" role="tabpanel">
                            <div class="grid-layout" data-grid="grid-4">
                                <!-- card product 1 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/sports-clothing.jpg" src="images/products/sports-clothing.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/sports-clothing-2.jpg" src="images/products/sports-clothing-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Pocket Shorts</a>
                                        <span class="price">$38.00</span>
                                        
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/sports-clothing-3.jpg" src="images/products/sports-clothing-3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/sports-clothing-4.jpg" src="images/products/sports-clothing-4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Essential Oversized Zip Up Hoodie</a>
                                        <span class="price">$38.00</span>
                                       
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/sports-clothing-6.jpg" src="images/products/sports-clothing-6.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/sports-clothing-5.jpg" src="images/products/sports-clothing-5.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Crest 7" Shorts</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/sports-clothing-7.jpg" src="images/products/sports-clothing-7.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/sports-clothing-8.jpg" src="images/products/sports-clothing-8.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title">Crest Long Sleeve T-Shirt</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt-15.jpg" src="images/products/t-shirt-15.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-16.jpg" src="images/products/t-shirt-16.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Crest T-Shirt</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="tab-pane" id="jeans" role="tabpanel">
                            <div class="grid-layout" data-grid="grid-4">
                                <!-- card product 1 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/sports-clothing.jpg" src="images/products/sports-clothing.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/sports-clothing-2.jpg" src="images/products/sports-clothing-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Pocket Shorts</a>
                                        <span class="price">$38.00</span>
                                        
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/sports-clothing-3.jpg" src="images/products/sports-clothing-3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/sports-clothing-4.jpg" src="images/products/sports-clothing-4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Essential Oversized Zip Up Hoodie</a>
                                        <span class="price">$38.00</span>
                                       
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/sports-clothing-6.jpg" src="images/products/sports-clothing-6.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/sports-clothing-5.jpg" src="images/products/sports-clothing-5.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Crest 7" Shorts</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/sports-clothing-7.jpg" src="images/products/sports-clothing-7.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/sports-clothing-8.jpg" src="images/products/sports-clothing-8.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title">Crest Long Sleeve T-Shirt</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/t-shirt-15.jpg" src="images/products/t-shirt-15.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/t-shirt-16.jpg" src="images/products/t-shirt-16.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>4 sizes available</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Crest T-Shirt</a>
                                        <span class="price">$38.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Sale Product -->

           <!-- Testimonial -->
           <section class="flat-testimonial-v2 py-0 wow fadeInUp" data-wow-delay="0s">
            <div class="container">
                <div class="wrapper-thumbs-testimonial-v2 type-1 flat-thumbs-testimonial">
                    <div class="box-left">
                        <div dir="ltr" class="swiper tf-sw-tes-2" data-preview="1" data-space-lg="40" data-space-md="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item lg lg-2">
                                        <div class="icon">
                                            <img class="lazyloaded" data-src="{{ asset('frontend/images/item/quote.svg')}}" src="{{ asset('frontend/images/item/quote.svg') }}">
                                        </div>
                                        <div class="heading fs-12 mb_18">Testimonial</div>
                                        
                                        <p class="text">
                                            "The shipping is always fast and the customer service team is friendly and helpful. I highly recommend this site to anyone looking for affordable clothing."
                                        </p>
                                        <div class="author box-author">
                                            <div class="box-img d-md-none rounded-0">
                                                <img class="lazyload img-product" data-src="images/slider/te4.jpg" src="images/slider/te4.jpg" alt="image-product">
                                            </div>
                                            <div class="content">
                                                <div class="name">Robert smith</div>
                                                <a href="product-detail.html" class="metas link">Purchase item : <span>Boxy T-shirt</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="d-md-flex d-none box-sw-navigation">
                            <div class="nav-sw nav-next-slider nav-next-tes-2"><span class="icon icon-arrow-left"></span></div>
                            <div class="nav-sw nav-prev-slider nav-prev-tes-2"><span class="icon icon-arrow-right"></span></div>
                        </div>
                        <div class="d-md-none sw-dots style-2 sw-pagination-tes-2"></div>
                    </div>
                    <div class="box-right">
                        <div dir="ltr" class="swiper tf-thumb-tes" data-preview="1" data-space="30">
                            <div class="swiper-wrapper">
                                
                                <div class="swiper-slide">
                                    <div class="grid-img-group style-ter-1">
                                        <div class="box-img item-1 hover-img">
                                            <div class="img-style">
                                                <img class="lazyload" data-src="images/slider/te4.jpg" src="images/slider/te4.jpg" alt="img-slider">
                                            </div>
                                        </div>
                                        <div class="box-img item-2 hover-img">
                                            <div class="img-style">
                                                <img class="lazyload" data-src="images/slider/te3.jpg" src="images/slider/te3.jpg" alt="img-slider">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->

        <!-- Blogs post -->
        <section class="flat-spacing-14 pb-0">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Blogs post</span>
                </div>
                <div class="hover-sw-nav view-default hover-sw-3">
                    <div dir="ltr" class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay="0s">
                                    <div class="article-thumb h-460">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/blog-10.jpg" src="images/blog/blog-10.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-detail.html" class="tf-btn btn-sm btn-fill animate-hover-btn">Men</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Hot Trends Alert: Stay Chic This Season</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".1s">
                                    <div class="article-thumb h-460">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/blog-3.jpg" src="images/blog/blog-3.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-detail.html" class="tf-btn btn-sm btn-fill animate-hover-btn">Men</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">An Exclusive Clothing Collaboration</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".2s">
                                    <div class="article-thumb h-460">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/blog-11.jpg" src="images/blog/blog-11.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-detail.html" class="tf-btn btn-sm btn-fill animate-hover-btn">Men</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Unleashing Your Fashion Flair</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".3s">
                                    <div class="article-thumb h-460">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/blog-12.jpg" src="images/blog/blog-12.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-detail.html" class="tf-btn btn-sm btn-fill animate-hover-btn">Men</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Exploring Unique Fashion Vibes</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".4s">
                                    <div class="article-thumb h-460">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/blog-4.jpg" src="images/blog/blog-4.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-detail.html" class="tf-btn btn-sm btn-fill animate-hover-btn">Men</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Hello Fashion by Colombian-American</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-recent justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Blogs post -->

        
@endsection