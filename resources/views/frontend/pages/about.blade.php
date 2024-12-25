@extends('layouts.frontend.pages')

@section('style')
    <style>
        
    </style>
@endsection

@section('content')


@include('partials.breadcrumb')
    
    <!--About Section-->
    <section class="about-section-three">
        <div class="container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="text">{!! $about->who_we_are !!}</div></br>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <figure class="image wow" data-wow-delay="0ms"><img src="{{ asset($about->featured_image)}}" alt="" /></figure>
                </div>
            </div>

        </div>
    
    </section>

    <!--Services Section-->
        <section class="featured-section">
            <div class="container">
                    <div class="sec-title">
                        <h2>Technical Expertise</h2>
                    </div>
                    <div class="row clearfix">
                            <!--Featured Block Two-->
                            <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                                <div class="inner-box">
                                    <div class="icon-box" style="font-size: 35px; color: green; margin-top: 20px;">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">Backend Development</a></h3>
                                        <div class="text">Proficient in Programming langugagues and Frameworks such as PHP, Python, Laravel, Django, and Node.js. Experience in integrating third-party services using REST APIs (JSON, XML formats)
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Featured Block Two-->
                            <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                                <div class="inner-box">
                                    <div class="icon-box" style="font-size: 35px; color: green; margin-top: 20px;">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">Frontend Familiarity</a></h3>
                                        <div class="text">Skilled in HTML5, CSS3, and JavaScript, Vue.js, and React.js for dynamic and responsive UI development</div>
                                    </div>
                                </div>
                            </div>



                            <!--Featured Block Two-->
                            <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                                <div class="inner-box">
                                    <div class="icon-box" style="font-size: 35px; color: green; margin-top: 20px;">
                                        <i class="fas fa-database"></i>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">Database & Tools</a></h3>
                                        <div class="text">Expertise in MySQL, version control with Git and adherence to Agile development and testing frameworks</div>
                                    </div>
                                </div>
                            </div>

                            <!--Featured Block Two-->
                            <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                                <div class="inner-box">
                                    <div class="icon-box" style="font-size: 35px; color: green; margin-top: 20px;">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">Cloud Computing</a></h3>
                                        <div class="text">Proficiency in Azure cloud services, skilled at troubleshooting and resolving complex technical issues</div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
            </div>
        </section>

        @include('layouts.frontend.inc.contactus-cta')
        
@endsection