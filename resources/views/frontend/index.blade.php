@extends('layouts.frontend.frontend')

@section('style')
	<style>
     
	</style>
@endsection

@section('content')
        <!-- Slider -->
        <div class="tf-slideshow slider-home-2 slider-effect-fade position-relative"> 
            <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="true" data-auto-play="true" data-delay="2000" data-speed="5000">
            
                <div class="swiper-wrapper" lazy="true">
                    @foreach ($mainslider as $item)
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img class="lazyload" data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                <div class="box-content">
                                    <div class="container">
                                        <h1 class="fade-item fade-item-1" style="font-family: Playfair Display; font-weight: 700;">{!! $item->title !!}</h1>
                                        <!-- <p class="fade-item fade-item-2">{{ $item->description }}</p> -->
                                        <a href="{{ $item->link }}" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>{{ $item->button_title }}</span><i class="icon icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="wrap-pagination">
                <div class="container">
                    <div class="sw-dots sw-pagination-slider justify-content-center"></div>
                </div>
            </div>
        </div>
        <!-- /Slider -->

        <!-- About -->
        <section class="flat-spacing-10 bg_white">
            <div class="container">
                <div class="tf-grid-layout md-col-2 align-items-center flat-wrap-countdown countdown-black">
                    <div class="tf-content-wrap-v2 wow fadeInUp" data-wow-delay="0s">
                        <h4 class="heading" style = "color:black;"> <strong> {{ $aboutsection->big_title }} </strong></h4>
                        <p class="description" style = "color:black; font-size: 14px; text-align: justify;">{!! nl2br(e($aboutsection->description)) !!}</p>
                        <a href="/about" style = "color:black;" class="tf-btn btn-line"><strong>Discover More About Me</strong><i class="icon icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Countdown -->

         <!--Services Section-->
         <section class="featured-section">
            <div class="container">
                    <div class="sec-title">
                        <h2>How I can Help</h2>
                        <!-- <div class="text">We believe what we achieve</div> -->
                    </div>
                    <div class="row clearfix">
                        @foreach ($servicessection as $item) 	
                            <!--Featured Block Two-->
                            <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                                <div class="inner-box">
                                    <div class="icon-box" style="font-size: 35px; color: green; margin-top: 20px;">
                                        <i class="{{ $item->icon }}"></i>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">{{$item->title}}</a></h3>
                                        <div class="text">{{$item->description}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </section>
        
        <!-- Technology Stack -->
        <section class="flat-spacing-5 pb_0">
            <div class="container">
                <div class="sec-title" style="margin-bottom: 50px;">
                    <h2>Frameworks and Programming Languages Used</h2>
                </div>

                <div class="hover-sw-nav">
                    <div dir="ltr" class="swiper tf-sw-collection" data-preview="4" data-tablet="2" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                        <div class="swiper-wrapper">
                            @foreach ($techstacks as $item)
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item style-2 hover-img">
                                        <div class="collection-inner">
                                            <a href="#" class="collection-image img-style">
                                                <img class="lazyload" data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}" alt="{{ $item->name}}" style="width: 100px; height: auto;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-collection box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-collection box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                </div>
            </div>
        </section>
        <!-- /Technology stacks -->

        <!--Projects Section-->
        <section class="causes-section alternate">
            
            <div class="container">
            
                <div class="sec-title centered">
                    <h2>Latest Projects</h2>
                    <!-- <div class="text">We believe what we achieve</div> -->
                </div>
                            
                <div class="row clearfix">
                    @foreach ($projects as $item) 
                        <!--Cause Block-->
                        <div class="cause-block alternate col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms">
                                <div class="image-box">
                                    <figure class="image"><a href="{{ $item->link }}"><img src="{{ asset($item->image) }}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ $item->link }}">{{ $item->name }}</a></h3>
                                    <div class="text">{{ $item->description }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div style="display: flex; justify-content: center; align-items: center; height: 100%; text-align: center;">
                        <a href="/projects" class="d-flex align-items-center gap-10">
                            <strong>
                                Explore More of My Work 
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor"></path>
                                </svg>
                            </strong>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.frontend.inc.contactus-cta')

        @include('layouts.frontend.inc.testimonials')

         <!-- Clients -->
         <section class="flat-spacing-7">
            <div class="container">
                <div class="wrap-carousel wrap-shop-gram">
                    <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="7" data-space-md="7">
                        <div class="swiper-wrapper">
                            @foreach ($clients as $item)
                                <div class="swiper-slide">
                                    <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".2s">
                                        <div class="img-style">
                                            <img class="lazyload img-hover" data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}" alt="Logo of {{$item->name}}" style = "width: 100px; height: auto;">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="sw-dots sw-pagination-gallery justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Clients -->

        <!-- Blogs post -->
        <section class="flat-spacing-14 pb-0">
            <div class="container">
                <div class="sec-title centered">
                    <h2>Articles</h2>
                </div>
                <div class="hover-sw-nav view-default hover-sw-3">
                    <div dir="ltr" class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            @foreach($blogs as $blog)
                                <div class="swiper-slide" lazy="true">
                                    <div class="blog-article-item wow fadeInUp" data-wow-delay="0s">
                                        <div class="article-thumb h-460">
                                            <a href="{{ route('blog.details', $blog->slug) }}">
                                                <img class="lazyload" data-src="{{ asset($blog->cover_image)}}" src="{{ asset($blog->cover_image)}}" alt="{{ $blog->title }}">
                                            </a>
                                        </div>
                                        <div class="article-content">
                                            <div class="article-title">
                                                <a href="{{ route('blog.details', $blog->slug) }}" class="">{{ $blog->title }}</a>
                                            </div>
                                            <div class="article-btn">
                                                <a href="{{ route('blog.details', $blog->slug) }}" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

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