@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle: '500 | Internal Server Error')

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
                            <img src="{{ asset('frontend/images/item/500.webp') }}" alt="">
                        </div>
                        <div class="title">
                            Oops...Something went wrong on our end.
                        </div>
                        <p>We're currently experiencing technical issues. Please try again later, or contact support if the issue persists.</p>
                        <a href="/" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Back to Home</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /page-404 -->

@endsection