@extends('layouts.frontend.pages')
@section('pageTitle', isset($pageTitle) ? $pageTitle: $project->name . '  - Alexander Igonor')

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
                                        <a href="/projects" class="tags-item">Projects</a>
                                    </li>
                                </ul>
                                <div class="title">{{ $project->name }}</div>
                                <div class="image">
                                    <img class="lazyload" data-src="{{ asset($project->image)}}" src="{{ asset($project->image)}}" alt="{{ $project->name }}">
                                </div>
                            </div>
                            <div class="desc">{!! $project->content !!}</div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-sidebar-mobile d-flex">
            <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i class="icon-open"></i></button>
        </div>
        <!-- /blog-detail -->    

@endsection