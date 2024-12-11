@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection

@section('content')

    @include('partials.breadcrumb')

    <!--Contact Section-->
    <section class="contact-section contact-page">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20" data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-heart-2"></span></div>
        
        <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-heart-2"></span></div>

        <div class="icon-three paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-dove"></span></div>

        <div class="auto-container">
            @include('layouts.frontend.inc.contact-form')
        </div>
            <div class="info-container">
                <div class="row clearfix">
                    
                    <!--Info Block-->
                    <div class="info-block bg-blue col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <h3>{{ $contact->location_name }}</h3>
                            <ul class="info">
                                <li><span class="fa fa-map-marker-alt"></span> {{ $contact->address }}</li>
                                <li><span class="fa fa-phone-alt"></span> <a href="tel:812-070-3692">Phone {{ $contact->phone }}</a></li>
                                <li><span class="fa fa-envelope-open"></span> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="{{ $contact->facebook_link }}"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="{{ $contact->twitter_link }}"><span class="fab fa-twitter"></span></a></li>
                                <!-- <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li> -->
                                <li><a href="{{ $contact->instagram_link }}"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="{{ $contact->youtube_link }}"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>

            @include('layouts.frontend.inc.newsletter-cta')
            
        </div>

    </section>

@endsection