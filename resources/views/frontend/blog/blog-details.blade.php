@extends('layouts.frontend.pages')
@section('pageTitle', isset($pageTitle) ? $pageTitle: $blog->title . '  - Alexander Igonor')

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
                                <h1 class="title">{{ $blog->title }}</h1>
                                <div class="meta">by <span>{{ $blog->admin->full_name }}</span> on <span>{{ $blog->created_at->format('M') }} {{ $blog->created_at->format('d') }}</span></div>
                                <div class="image">
                                    @include('components.responsive-image', ['path' => $blog->cover_image, 'alt' => $blog->title, 'class' => '', 'sizes' => '100vw', 'lazyload' => true])
                                </div>
                            </div>
                            <div class="desc">{!! $blog->content !!}</div>
                            <div class="global-reset bot d-flex justify-content-between flex-wrap align-items-center">
                                <div class="d-flex align-items-center gap-20">
                                    <a href="/blog" class="tf-btn btn-line fw-6">Back to articles<i class="icon icon-arrow1-top-left"></i></a>
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
