
@extends('layouts.frontend.pages')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Error 500')

@section('style')
	<style>

	</style>
@endsection


@section('content')
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url('{{ asset('storage/' . $breadcrumb_image) }}');"></div>
        <div class="auto-container">
            <h1>500 - Internal Server Error</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">500 - Internal Server Error</li>
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
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h1>We’re experiencing technical issues.</h1>
                <p style = "margin-top: 20px;">Please try again later or contact support if the issue persists.</p>
                <div class="link-box"><a href="/" class="theme-btn btn-style-two"><span class="btn-title">Back to Home</span></a></div>
            </div>
        </div>
    </section>

@endsection