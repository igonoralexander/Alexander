@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')

    <!--Services Section-->
    <section class="featured-section" style="margin-top: 50px;">
        <div class="container">
            <div class="featured-row">
                <div class="sec-title centered">
                    <h2>Service Offerings</h2>
                    <div class="text" style="font-size: 14px;">I provide tailored digital solutions that drive growth, enhance efficiency, and deliver lasting value through innovation and user-centric design.</div>
                </div>
                <div class="row clearfix">
                    @foreach ($services as $item) 	
                        <!--Featured Block Two-->
                        <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                            <div class="inner-box">
                                <div class="icon-box" style="margin-top: 20px; font-size: 35px; color: green;">
                                    <i class="{{ $item->icon }}"></i>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">{{$item->title}}</a></h3>
                                    <div class="text" style = "font-size: 14px;">{{$item->description}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    @include('layouts.frontend.inc.contactus-cta')

@endsection
