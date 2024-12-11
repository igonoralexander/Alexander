@extends('layouts.frontend.pages')
@section('pageTitle', isset($pageTitle) ? $pageTitle: $industry->name . '  - IG Software Nig')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')


    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="post-details">
                        <!--Cause Details-->
                        <div class="cause-details">
                            <div class="lower-box">
                                <div class="post-content"> {!! $industry->content !!}
                                    <div class="featured-video-box">
                                        <div class="inner">
                                            <h4><a href="https://www.youtube.com/watch?v=C9rVAbcQH_U" class="lightbox-image">Watch Video</a></h4>
                                            <div class="link-box"><a href="#" class="default-link">Download Proposal</a></div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="image-column col-md-6 col-sm-12">
                                            <figure><img src="images/resource/blog-image-12.jpg" alt=""></figure>
                                        </div>
                                        <div class="column col-md-6 col-sm-12">
                                            <div class="inner">
                                                <!--Accordion-->
                                                <div class="accordion-box">
                                                    <!--Block-->
                                                    <div class="accordion block current wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                        <div class="acc-btn active">A book to help people <div class="icon flaticon-cross"></div></div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Alit usmod tempor incididunt laboret doloe  quis trud exercitation ullamco laboris nisiut rue dolor prehendrit lorem.</div>
                                                            </div>
                                                        </div>
                                                    </div> 

                                                    <!--Block-->
                                                    <div class="accordion block wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                                        <div class="acc-btn">Our mission to achieve <div class="icon flaticon-cross"></div></div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Alit usmod tempor incididunt laboret doloe  quis trud exercitation ullamco laboris nisiut rue dolor prehendrit lorem.</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Block-->
                                                    <div class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                                        <div class="acc-btn">Show support for needy<div class="icon flaticon-cross"></div></div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Alit usmod tempor incididunt laboret doloe  quis trud exercitation ullamco laboris nisiut rue dolor prehendrit lorem.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Accordion-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="share-post clearfix">
                                <div class="share-title">Share This</div>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-whatsapp"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h3> <strong> Client testimonial  </strong> </h3></div>
                                <div class="comment-box">
                                    <div class="comment">
                                        <h4 class="name">Scott William</h4>
                                        <div class="text">Auis nostrud exercitation ullam laboris nisitm sed aliquip consequat duis autesre dolor aliqua nim ad minim quis nostrud exercitation modo consequat.</div>
                                    </div>
                                </div>

                        </div>

                        <!--Leave Comment Form-->
                        <div class="leave-comments">
                            <div class="group-title"><h2>Leave your testimonial</h2></div>
                            <div class="default-form comment-form">
                                <form method="post" action="contact.html">
                                    <div class="row clearfix">                                    
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="field-label">Your Name</div>
                                            <input type="text" name="username" placeholder="" required="">
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="field-label">Email</div>
                                            <input type="email" name="email" placeholder="" required="">
                                        </div>

                                        <div class="col-md-12 col-sm-12 form-group">
                                            <div class="field-label">Say Something about our {{ $industry->name }} product</div>
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                <!--End Content Side-->

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Category Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-inner">
                                <h3>Industries We Serve</h3>
                                <div class="widget-content">
                                    <ul>
                                        @foreach($industrs as $item)
                                            <li class = ""><a class="clearfix" href="{{ route('industries.details', $item->slug) }}"> {{ $item->name}} <span class="count">93</span></a></li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div> 

                    </aside>
                </div>
                <!--End Sidebar Side-->
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection