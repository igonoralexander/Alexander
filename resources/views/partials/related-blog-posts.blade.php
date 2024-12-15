
                @foreach($relatedPosts as $item)
                        <!--News Block Two-->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="kausid-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" }, "1024":{ "items" : "1" }}}'>
                                    
                                        <div class="carousel-item">
                                                <figure class="image">
                                                    <a href="{{ route('blog.details', $item->slug) }}">
                                                        <img src="{{ asset($item->cover_image)}}" alt="">
                                                    </a>
                                                </figure>

                                                <div class="lower-box">
                                                    <h2>
                                                        <a href="{{ route('blog.details', $item->slug) }}">{{ $item->title }}</a>
                                                    </h2>
                                                </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach