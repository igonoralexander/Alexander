@extends('layouts.frontend.blogs')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')

      <!--Sidebar Page Container-->
      <div class="sidebar-page-container sidebar-left">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-posts">

                        @foreach($blogpage as $blog)
                                <!--News Block Two-->
                                <div class="news-block-two">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="{{ route('blog.details', $blog->slug) }}"><img src="{{ asset($blog->cover_image)}}" alt=""></a>
                                            </figure>
                                            <div class="date-box"><span>{{ $blog->created_at->format('d') }}</span> {{ $blog->created_at->format('M') }}</div>
                                        </div>
                                        <div class="lower-box">
                                            <h2><a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title }} </a></h2>
                                            <div class="text">{{ Str::limit(html_entity_decode(strip_tags($blog->content)), 350) }}</div>
                                            <div class="bottom-box clearfix">
                                                <div class="post-meta">
                                                    <ul class="clearfix">
                                                        <li><a href="#"><span class="far fa-user"></span> By {{ $blog->admin->full_name }}</a></li>
                                                        <li><a href="#"><span class="far fa-comment"></span> Comments 845</a></li>
                                                        <li><a href="#"><span class="far fa-heart"></span> Likes 1.6k</a></li>
                                                    </ul>
                                                </div>
                                                <div class="link-box">
                                                    <a href="{{ route('blog.details', $blog->slug) }}" class="theme-btn btn-style-two"><span class="btn-title">Read more</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach


                        <!--News Block Three-->
                        <div class="news-block-three">
                            <div class="inner-box">
                                <div class="text">Since vindictively over agile the some far well besides constructively with close excellent grabbed gosh contrary far dalmatian upheld intre more some apart dear boa much cast falcon.</div>
                                <div class="author">Sande Well</div>
                            </div>
                        </div>

                    </div>

                    <div class="pagination-box">
                        <ul class="styled-pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><span class="fa fa-arrow-right"></span></a></li>
                        </ul>
                    </div>

                </div>
                <!--End Content Side-->

                @include('partials.blog-sidebar')
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

    @include('layouts.frontend.inc.newsletter-cta')

@endsection