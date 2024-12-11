@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')

          <!--Projects Section-->
          <section class="activity-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Bringing Visions to Life with Exceptional Web Solutions</h2>
                    <div class="text">Check our completed projects out</div>
                </div>

                <div class="mixit-gallery">
                    <!--Filter-->
                    <div class="filters text-center clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="filter active" data-role="button" data-filter="all"><span class="txt">All</span></li>
                                @foreach ($categories as $category)
                                    <li class="filter active" data-role="button" data-filter=".{{ $category->slug }}">
                                        <span class="txt">{{ $category->name }}</span>
                                    </li>
                                @endforeach
                         
                        </ul>                     
                    </div>  
                        <div class="filter-list row clearfix">
                            @foreach ($allprojects as $item) 
                                <!--Activity Block-->
                                <div class="activity-block mix all {{ optional($item->projectcategory)->slug }} col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <figure class="image">
                                            <img src="{{ asset($item->image) }}" alt="">
                                            <a href="{{ asset($item->image) }}" class="lightbox-image overlay" data-fancybox="gallery-two"><span class="icon fa fa-search-plus"></span></a>
                                        </figure>
                                        <div class="caption-box">
                                            <div class="cap-inner">
                                                <h3><a href="{{ $item->link}}">{{ $item->name }}</a></h3>
                                                <div class="cat-info"> {{ $item->description }} </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </section>

        @include('layouts.frontend.inc.testimonials')
        
@endsection