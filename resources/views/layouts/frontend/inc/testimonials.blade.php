   <!-- Testimonial -->
   <section class="flat-spacing-5 mt_20 flat-testimonial">
            <div class="container">
                <div class="sec-title">
                    <h2>Happy Clients</h2>
                    <div class="text">Hear what they say about us</div>
                </div>
                <div class="wrap-carousel">
                    <div dir="ltr" class="swiper tf-sw-testimonial" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="15">
                        <div class="swiper-wrapper">
                            @foreach ($testimonial as $item)
                                <div class="swiper-slide">
                                    <div class="testimonial-item style-column wow fadeInUp" data-wow-delay="0s">
                                        <div class="text">{{$item->testimonial}}</div>
                                        <div class="author">
                                            <div class="name">{{$item->name}}</div>
                                            <div class="metas">{{$item->title}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-testimonial lg"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-testimonial lg"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-testimonial justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->