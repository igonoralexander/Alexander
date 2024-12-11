
@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url('{{ asset('storage/' . $breadcrumb_image) }}');"></div>

        <div class="auto-container">
            <h1>Career Pathways</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Careers</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section-three">

        <div class="auto-container">
            <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <!-- <div class="sub-title"> Restoring Hope and Smiles</div> -->
                                <h2> Career Pathways & Compensation Tiers </h2>
                                <!-- <div class="lower-title">Empowering Communities, Transforming Lives</div> -->
                            </div>

                            <div class="lower-text"><b>Intro</b></div></br>

                            <div class="lower-text">At Bagil Guard, we are committed to hiring highly skilled and experienced personnel across various levels of expertise. From entry-level security officers to senior security strategists, each cadre is carefully selected for their unique skill set to meet the diverse needs of our clients. </div></br>
                            <div class="lower-text">Our team is equipped with the knowledge and training to provide tailored security solutions, ensuring the highest standard of protection for every client. Whether it's for residential, corporate, or event security, we have the right professionals in place to deliver exceptional service and peace of mind.</div></br>

                            @foreach($cadrelevels as $cadrelevel)
                                <div class="sec-title"> <h4> {{ $cadrelevel->cadre_level }}</h4> </div> 

                                <div class="lower-text"><b>Qualifications:</b> {!! nl2br(e($cadrelevel->qualifications)) !!}</div> </br>

                                <div class="lower-text"><b>Skills:</b> {!! nl2br(e($cadrelevel->skills)) !!}</div></br>

                                <div class="lower-text"><b>Physical Abilities:</b> {!! nl2br(e($cadrelevel->physical_abilities)) !!} </div></br>

                                <div class="lower-text"><b>Remuneration:</b> {!! nl2br(e($cadrelevel->monthly_remuneration)) !!} </div></br>
                                
                                <div class="lower-text"><b>Benefits:</b> {!! nl2br(e($cadrelevel->benefits)) !!} </div></br>
                            @endforeach                
                        </div>
                    </div>
                

                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <figure class="image wow slideInRight" data-wow-delay="0ms"><img src="{{ asset($about->featured_image)}}" alt="" /></figure>
                </div>
            </div>
        </div>
    
    </section>

    <!--Team Section-->
    <section class="team-section alternate">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20" data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-tshirt"></span></div>
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Meet Our Security Team</h2>
                <div class="text">Join us as Security Guards</div>
            </div>
            <div class="row clearfix">
                @foreach ($securityteam as $item)
                    <!--Team Block-->
                    <div class="team-block col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="#"><img src="{{ asset($item->image) }}" alt=""></a></figure>
                            <h3><a href="#">{{$item->name}}</a></h3>
                            <div class="designation">{{$item->title}}</div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
