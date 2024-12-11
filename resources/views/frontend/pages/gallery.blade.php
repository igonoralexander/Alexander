@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')


    <!-- Page Banner Section -->
    <section class="page-banner">
    <div class="image-layer" style="background-image: url('{{ asset('storage/' . $breadcrumb_image) }}');"></div>

        <div class="auto-container">
            <h1>Our Gallery</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <!--Activity Section-->
    <section class="activity-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Gallery</h2>
            </div>

            <div class="mixit-gallery">
                <!--Filter-->
                <!-- <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="filter active" data-role="button" data-filter="all"><span class="txt">All</span></li>
                        <li class="filter" data-role="button" data-filter=".medical"><span class="txt">Medical Charity</span></li>
                        <li class="filter" data-role="button" data-filter=".education"><span class="txt">Education</span></li>
                        <li class="filter" data-role="button" data-filter=".animal"><span class="txt">Animal Protection</span></li>
                        <li class="filter" data-role="button" data-filter=".shelter"><span class="txt">Shelter</span></li>
                    </ul>                     
                </div>   -->

                <div class="filter-list row clearfix">
                    @foreach ($gallery as $item) 
                        <!--Activity Block-->
                        <div class="activity-block mix all animal education col-md-4 col-sm-12">
                            <div class="inner-box">
                                <figure class="image">
                                    <img src="{{ asset($item->image) }}" alt="">
                                    <a href="{{ asset($item->image) }}" class="lightbox-image overlay" data-fancybox="gallery-two"><span class="icon fa fa-search-plus"></span></a>
                                </figure>
                                <!-- <div class="caption-box">
                                    <div class="cap-inner">
                                        <h3><a href="#">Look After Animals</a></h3>
                                        <div class="cat-info"><a href="#">Save Animals</a>,<a href="#">Charity</a></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

@endsection