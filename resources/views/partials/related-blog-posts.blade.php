
        <!-- Related Articles -->
        <section class="mb_30">
            <div class="container">
                <div class="flat-title">
                    <h5 class="">Related Articles</h5>
                </div>
                <div class="hover-sw-nav view-default hover-sw-5">
                    <div dir="ltr" class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            @foreach($relatedPosts as $item)
                                <div class="swiper-slide" lazy="true">
                                    <div class="blog-article-item">
                                        <div class="article-thumb radius-10">
                                            <a href="{{ route('blog.details', $item->slug) }}">
                                                <img class="lazyload" data-src="{{ asset($item->cover_image)}}" src="{{ asset($item->cover_image)}}" alt="{{ $item->title }}">
                                            </a>
                                        </div>
                                        <div class="article-content">
                                            <div class="article-title">
                                                <a href="{{ route('blog.details', $item->slug) }}" class="">{{ $item->title }}</a>
                                            </div>
                                            <div class="article-btn">
                                                <a href="{{ route('blog.details', $item->slug) }}" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots d-flex style-2 sw-pagination-recent justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Related Articles -->

                