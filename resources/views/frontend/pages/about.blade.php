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
                <div class="sec-title" style = "margin-top: 20px;">
                    <div class="text" style = "font-size: 15px;"><strong>10+ years of experience in software engineering, I create innovative, user-focused solutions, developing applications and platforms that drive success</strong></div>
                </div>
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text">{!! $about->who_we_are !!}</div></br>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Call to Action-->
        <div class="container">
            <div class="call-to-box" style="margin-bottom: 50px;">
                <div class="inner">
                    <div class="row clearfix">
                        <div class="link-column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="link-box">
                                <a href="https://drive.google.com/file/d/1rCmSwZW0DDKXS6bcU1VmYJfG5-YbanRF/view?usp=drive_link" target="_blank" class="theme"><span class="btn-title"> My Resume</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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