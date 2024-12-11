
        <!--Testimonials Two Section-->
        <section class="testimonials-two ">
            <div class="auto-container">
            
                <div class="sec-title centered">
                    <h2>What People Saying About Us!</h2>
                </div>
                            
                <div class="carousel-box">
                    <div class="kausid-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 50, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "800":{ "items" : "2" }, "1024":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                        @foreach ($testimonial as $item)
                            <!--Testimonial Block Two-->
                            <div class="testimonial-block-two">
                                <div class="inner">
                                    <div class="top-left-icon"><span class="flaticon-chat"></span></div>
                                    <div class="text">{{$item->testimonial}}</div>
                                    <div class="info">
                                        <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                        <div class="author">{{$item->name}}</div>
                                        <div class="designation">{{$item->title}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </section>