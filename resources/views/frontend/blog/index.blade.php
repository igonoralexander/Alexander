@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')

        <!-- blog-list -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-list-main">

                        <div class="list-blog">
                            @foreach($blogpage as $blog)
                                <div class="blog-article-item style-row">
                                    <div class="article-thumb">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="{{ asset($blog->cover_image)}}" src="{{ asset($blog->cover_image)}}" alt="{{ $blog->title }}">
                                        </a>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class=""><strong>{{ $blog->title }} </strong></a>
                                        </div>
                                        <div class="desc">{{ Str::limit(html_entity_decode(strip_tags($blog->content)), 150) }} </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                            <ul class="wg-pagination global-reset">
                                <li class="active">
                                    <div class="pagination-item">1</div>
                                </li>
                                <li>
                                    <a href="#" class="pagination-item animate-hover-btn">2</a>
                                </li>
                                <li>
                                    <a href="#" class="pagination-item animate-hover-btn">3</a>
                                </li>
                                <li>
                                    <a href="#" class="pagination-item animate-hover-btn"><i class="icon-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-sidebar-mobile">
            <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i class="icon-open"></i></button>
        </div>
        <!-- /blog-list -->

@endsection