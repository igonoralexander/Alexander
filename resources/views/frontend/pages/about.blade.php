@extends('layouts.frontend.pages')

@section('style')
    <style>
        /* Paragraph spacing */
        .text p {
            margin: 1em 0;
        }

        /* List styling */
        .text ul,
        .text ol {
            margin: 1em 0;
            padding-left: 1.5em;
        }

        .text ul li,
        .text ol li {
            line-height: 1.6;
            margin-bottom: 0.5em;
        }

        /* Bullet styling */
        .text ul {
            list-style-type: disc;
        }

        .text ol {
            list-style-type: decimal;
        }

        /* Additional formatting */
        .text h1, .text h2, .text h3, .text h4, .text h5, .text h6 {
            margin-top: 1.5em;
            margin-bottom: 0.5em;
            line-height: 1.2;
        }

        /* Optional: Quote styling */
        .text blockquote {
            margin: 1em 1.5em;
            padding-left: 1em;
            border-left: 4px solid #ccc;
            color: #666;
        }
    </style>
@endsection

@section('content')
     <!-- Slider -->
     <section class="tf-slideshow about-us-page position-relative">
            <div class="banner-wrapper">
                <img class="lazyload" src="images/slider/about-banner-01.jpg" data-src="images/slider/about-banner-01.jpg" alt="image-collection">
                <div class="box-content text-center">
                    <div class="container">
                        <div class="text text-white">Empowering women to achieve <br class="d-xl-block d-none"> fitness goals with style</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Slider -->
        <!-- flat-title -->
        <section class="flat-spacing-9">
            <div class="container">
                <div class="flat-title my-0">
                    <span class="title">{{ $about->main_title }}</span>
                </div>
            </div>
        </section>
        <!-- /flat-title -->
        <div class="container"><div class="line"></div></div>
        <!-- image-text -->
        <section class="flat-spacing-23 flat-image-text-section">
            <div class="container">
                <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
                    <div class="tf-image-wrap">
                        <img class="lazyload w-100" data-src="images/collections/collection-69.jpg" src="images/collections/collection-69.jpg" alt="collection-img">
                    </div>
                    <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                        <div>
                            <div class="text">{!! $about->who_we_are !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flat-spacing-15">
            <div class="container">
                <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
                    <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                        <div>
                            <div class="heading">Our mission</div>
                            <div class="text">
                                Our mission is to empower people through sustainable fashion. <br class="d-xl-block d-none">
                                We want everyone to look and feel good, while also doing our part to <br class="d-xl-block d-none">
                                help the environment.We believe that fashion should be stylish, <br class="d-xl-block d-none">
                                affordable and accessible to everyone. Body positivity and inclusivity <br class="d-xl-block d-none">
                                are values that are at the heart of our brand.
                            </div>
                        </div>
                    </div>
                    <div class="grid-img-group">
                        <div class="tf-image-wrap box-img item-1">
                            <div class="img-style">
                                <img class="lazyload" src="images/collections/collection-71.jpg" data-src="images/collections/collection-71.jpg" alt="img-slider">
                            </div>
                        </div>
                        <div class="tf-image-wrap box-img item-2">
                            <div class="img-style">
                                <img class="lazyload" src="images/collections/collection-70.jpg" data-src="images/collections/collection-70.jpg" alt="img-slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /image-text -->
        <!-- iconbox -->
        <section>
            <div class="container">
                <div class="bg_grey-2 radius-10 flat-wrap-iconbox">
                    <div class="flat-title lg">
                        <span class="title fw-5">Quality is our priority</span>
                        <div>
                            <p class="sub-title text_black-2">Our talented stylists have put together outfits that are perfect for the season.</p> 
                            <p class="sub-title text_black-2">They've variety of ways to inspire your next fashion-forward look.</p>
                        </div>
                    </div>
                    <div class="flat-iconbox-v3 lg">
                        <div class="wrap-carousel wrap-mobile">
                            <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                                <div class="swiper-wrapper wrap-iconbox lg">
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box text-center">
                                            <div class="icon">
                                                <i class="icon-materials"></i>
                                            </div>
                                            <div class="content">
                                                <div class="title">High-Quality Materials</div>
                                                <p class="text_black-2">Crafted with precision and excellence, our activewear is meticulously engineered using premium materials to ensure unmatched comfort and durability.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box text-center">
                                            <div class="icon">
                                                <i class="icon-design"></i>
                                            </div>
                                            <div class="content">
                                                <div class="title">Laconic Design</div>
                                                <p class="text_black-2">Simplicity refined. Our activewear embodies the essence of minimalistic design, delivering effortless style that speaks volumes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box text-center">
                                            <div class="icon">
                                                <i class="icon-sizes"></i>
                                            </div>
                                            <div class="content">
                                                <div class="title">Various Sizes</div>
                                                <p class="text_black-2">Designed for every body and anyone, our activewear embraces diversity with a wide range of sizes and shapes, celebrating the beauty of individuality.</p>
                                            </div>
                                        </div>
                                    </div>
                               
                                </div>
                            </div>
                            <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /iconbox -->

@endsection