@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')

    <!--Services Section-->
    <section class="featured-section" style="margin-top: 50px;">
        <div class="auto-container">
            <div class="featured-row">
                <div class="sec-title centered">
                    <h2>Transforming Ideas into Reality Through Innovative Solutions</h2>
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
                                    <div class="text">{{$item->description}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!--Services Section-->
    <section class="featured-section">
        <div class="auto-container">
            <div class="bottom-info" style = "margin-bottom: ;">
                <div class="link-box" style="text-align: center;">
                    <a href="/contact" class="btn-style-five">
                        <span class="btn-title">Contact Us for more inquires </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.frontend.inc.why-choose-us')

    
    @include('layouts.frontend.inc.careers-cta')

@endsection