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
                <div class="sec-title centered" style = "margin-bottom: 20px;">
                    <h2>Enabling Success Across Diverse Industries</h2>
                </div>
                <div class="text" style="font-size: 15px; text-align: justify; margin-bottom: 50px;">At IG Software Nig, we specialize in crafting tailored solutions for businesses across various industries. Whether you're a startup seeking your first online presence or an established organization looking to scale, our expertise ensures your digital success. Explore various indudstries we serve.</div></br>
                
                <div class="row clearfix">
                    @foreach ($industrs as $item) 	
                        <!--Featured Block Two-->
                        <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                            <div class="inner-box">
                                <div class="icon-box" style="margin-top: 20px; font-size: 35px; color: green;">
                                    <i class="{{ $item->icon }}"></i>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ route('industries.details', $item->slug) }}">{{$item->name}}</a></h3>
                                    <div class="text">{{$item->description}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    @include('layouts.frontend.inc.why-choose-us')

    
    <section class="call-to-action alternate-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                        <h2>Get In Touch &amp; to discuss your unique needs!!</h2>
                        <div class="text"> Don’t see your industry listed? We’re confident we can still help.</div>
                    </div>
                    <div class="link-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                        <div class="link-box">
                            <a href="/contact" class="theme-btn btn-style-one"><span class="btn-title">Click Here</span></a>
                        </div>
                    </div>
                </div>
            </div>
</section>

@endsection