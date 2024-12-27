@extends('layouts.frontend.pages')
@section('pageTitle', isset($pageTitle) ? $pageTitle: $blog->title . '  - IG Software Nig')

@section('style')
	<style>
        
	</style>
@endsection


@section('content')

        <!-- blog-detail -->
        <div class="blog-detail">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-detail-main">
                            <div class="global-reset blog-detail-main-heading">
                                <ul class="tags-lists justify-content-center">
                                    <li>
                                        <a href="/" class="tags-item">Home</a>
                                    </li>
                                    <li>
                                        <a href="/blog" class="tags-item">Articles</a>
                                    </li>
                                </ul>
                                <div class="title">{{ $blog->title }}</div>
                                <div class="meta">by <span>{{ $blog->admin->full_name }}</span> on <span>{{ $blog->created_at->format('M') }} {{ $blog->created_at->format('d') }}</span></div>
                                <div class="image">
                                    <img class="lazyload" data-src="{{ asset($blog->cover_image)}}" src="{{ asset($blog->cover_image)}}" alt="{{ $blog->title }}">
                                </div>
                            </div>
                            <div class="desc">{!! $blog->content !!}</div>
                            <div class="global-reset bot d-flex justify-content-between flex-wrap align-items-center">
                                <div class="d-flex align-items-center gap-20">
                                    <p>Share:</p>
                                    <ul class="tf-social-icon d-flex style-default">
                                        <li><a href="#" class="box-icon round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                                        <li><a href="#" class="box-icon round social-twiter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                        <li><a href="#" class="box-icon round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                                        <li><a href="#" class="box-icon round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                        <li><a href="#" class="box-icon round social-pinterest border-line-black"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tf-article-navigation">
                                <div class="item position-relative d-flex w-100 prev">
                                    <a href="#" class="icon">
                                        <i class="icon-arrow-left"></i>
                                    </a>
                                    <div class="inner">
                                        <a href="#">PREVIOUS</a>
                                        <h6>
                                            <a href="#">Fashionista editors reveal their designer</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="item position-relative d-flex w-100 justify-content-end next">
                                    <div class="inner text-end">
                                        <a href="#">NEXT</a>
                                        <h6>
                                            <a href="#">The next generation of leather alternatives</a>
                                        </h6>
                                    </div>
                                    <a href="#" class="icon">
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-sidebar-mobile d-flex">
            <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i class="icon-open"></i></button>
        </div>
        <!-- /blog-detail -->

        @include('partials.related-blog-posts')    

@endsection