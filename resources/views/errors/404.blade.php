@extends('layouts.frontend.pages')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Error 404')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url('{{ asset('storage/' . $breadcrumb_image) }}');"></div>
        <div class="auto-container">
            <h1>404 - Page Not Found</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">404 - Page Not Found</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Error Section -->
    <section class="causes-section causes-page load-more-section">
        <div class="auto-container">
            <div class="content text-center" style = "margin-top: 50px;">
                <div class="icon text-center" style="font-size: 48px; color: #ff6b6b; margin-bottom: 20px;">
                    <i class="fas fa-search"></i>
                </div>
                <h1>Oops! The page you’re looking for doesn’t exist.</h1>
                <p style = "margin-top: 20px;">The page might have been moved or deleted.</p>
                <div class="link-box"><a href="/" class="theme-btn btn-style-two" style = "margin-bottom: 50px;"><span class="btn-title">Back to Home</span></a></div>
            </div>

            @include('layouts.frontend.inc.newsletter-cta')

        </div>
    </section>

@endsection