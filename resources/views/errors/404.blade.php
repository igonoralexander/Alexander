@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle: '404 | Page Not Found')

@section('style')
	<style>

	</style>
@endsection


@section('content')

     <!-- page-404 -->
        <section class="page-404-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="image">
                            <img src="{{ asset('frontend/images/item/404.svg') }}" alt="">
                        </div>
                        <div class="title">
                            Oops...That link is broken.
                        </div>
                        <p>Sorry, the page you’re looking for doesn’t exist or might have been removed. You can go back to my homepage to explore more.</p>
                        <a href="/" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Back to Home</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /page-404 -->

@endsection