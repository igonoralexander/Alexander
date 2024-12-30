@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')

        <!-- Projects  -->
        <section class="flat-spacing-5 pt_0">
            <div class="container">
                <div class="sec-title" style = "margin-top: 20px;">
                        <h2>Projects Highlights</h2>
                        <div class="text" style = "font-size: 14px;">Projects that highlight innovation, efficiency, and user-focused design, demonstrating proven results and expertise.</div>
                </div>
                <div class="flat-animate-tab">
                    <div class="global-reset flat-title flat-title-tab flex-row justify-content-between px-0">
                        <ul class="widget-tab-5" role="tablist">
                            <li class="nav-tab-item" role="presentation">   
                                <a href="#all" class="active" data-bs-toggle="tab">All</a>
                            </li>
                            @foreach ($categories as $category)
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#{{ $category->slug }}" data-bs-toggle="tab">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content">

                        <div class="tab-pane active show" id="all" role="tabpanel">
                            <div class="tf-grid-layout tf-col-2 lg-col-2">
                                @foreach ($allprojects as $item) 
                                    <!-- card product 1 -->
                                    <div class="card-product style-9">
                                        <div class="card-product-wrapper">
                                            <a href="{{ route('project.details', $item->slug) }}" target="_blank" class="product-img">
                                                <img class="lazyload img-product" data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}" alt="{{$item->name }}">
                                                <img class="lazyload img-hover" data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}" alt="{{$item->name }}">
                                            </a>
                                        </div>
                                        <div class="card-product-info">
                                            <div class="inner-info">
                                                <a href="{{ route('project.details', $item->slug) }}" target="_blank" class="title link fw-6">{{$item->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Tab Content for Each Category -->
                        @foreach ($categories as $category)
                            <div class="tab-pane" id="{{ $category->slug }}" role="tabpanel">
                                <div class="tf-grid-layout tf-col-2 lg-col-2">
                                    @foreach ($category->projects as $item)
                                        <div class="card-product style-9">
                                            <div class="card-product-wrapper">
                                                <a href="{{ route('project.details', $item->slug) }}" target="_blank" class="product-img">
                                                    <img class="lazyload img-product" data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                                                    <img class="lazyload img-hover" data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                                                </a>
                                            </div>
                                            <div class="card-product-info">
                                                <div class="inner-info">
                                                    <a href="{{ route('project.details', $item->slug) }} " target="_blank" class="title link fw-6">{{ $item->name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- /Projects -->

        @include('layouts.frontend.inc.testimonials')
        
@endsection