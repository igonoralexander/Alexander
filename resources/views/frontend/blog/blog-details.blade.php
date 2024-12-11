@extends('layouts.frontend.blogs')
@section('pageTitle', isset($pageTitle) ? $pageTitle: $blog->title . '  - IG Software Nig')

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
                        <!--Blog Details-->
                        <div class="blog-details">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset($blog->cover_image)}}" alt=""></figure>
                                <div class="date-box"><span>{{ $blog->created_at->format('d') }}</span> {{ $blog->created_at->format('M') }}</div>
                            </div>
                            <div class="lower-box">
                                <h2>{{ $blog->title }} </h2>
                                <div class="info-box clearfix">
                                    <div class="post-meta">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="far fa-user"></span> By {{ $blog->admin->full_name }}</a></li>
                                            <li><a href="#"><span class="far fa-comment"></span> Comments 845</a></li>
                                            <li><a href="#"><span class="far fa-heart"></span> Likes 1.6k</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-content">{!! $blog->content !!}</div>
                            </div>

                            <div class="share-post clearfix">
                                <div class="share-title">Share This</div>
                                <ul class="social-links clearfix">
                                    <li>
                                        <a href="https://twitter.com/share?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}"
                                            target="_blank" 
                                            rel="noopener">

                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                                            target="_blank" 
                                            rel="noopener">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . url()->current()) }}" 
                                            target="_blank" 
                                            rel="noopener">
                                            <span class="fab fa-whatsapp"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}" 
                                            target="_blank" 
                                            rel="noopener">
                                            <span class="fab fa-telegram"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" 
                                            target="_blank" 
                                            rel="noopener">
                                            <span class="fab fa-linkedin-in"></span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                       
                    </div>

                    @include('partials.related-blog-posts')

                </div>
                <!--End Content Side-->

                @include('partials.blog-sidebar')

            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

    @include('layouts.frontend.inc.newsletter-cta')

@endsection