
@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')

   <!--Team Section-->
    <section class="team-section">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20" data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-tshirt"></span></div>
        
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>The Creative Minds Behind Innovative Solutions.</h2>
            </div>
                        
            <div class="carousel-box">
                <div class="kausid-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "800":{ "items" : "2" }, "1024":{ "items" : "3" }}}'>         
                    @foreach ($securityteam as $item)	
                        <!--Team Block-->
                        <div class="team-block">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img src="{{asset ($item->image) }}" alt="" style="display: block; margin: 0 auto; width: 300px; height: auto;">></a></figure>
                                <h3><a href="#">{{$item->name}}</a></h3>
                                <div class="designation">{{$item->title}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            @include('layouts.frontend.inc.core-values')

        </div>
    </section>

    @include('layouts.frontend.inc.careers-cta')

@endsection
