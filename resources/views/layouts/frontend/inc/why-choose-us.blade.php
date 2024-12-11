         <!--Why Choose Us Section-->
        <section class="featured-section">
            <div class="auto-container">
                <div class="featured-row">
                    <div class="sec-title centered" style = "margin-top: 60px; margin-bottom: 30px;">
                        <h2>Why Choose Us</h2>
                        <p class="intro-text">Experience unmatched expertise, innovation, and dedication tailored to your needs.</p>
                    </div>
                    
                    <div class="row clearfix">
                        @foreach ($whychooseus as $item)
                        <!-- Feature Block -->
                            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                                <div class="inner-box" style="text-align: center; padding: 20px;">
                                    <div class="icon-box" style="font-size: 35px; color: #287F47;">
                                        <i class="{{ $item->icon }}"></i>
                                    </div>
                                    <div class="lower-content">
                                        <h3 style="font-weight: bold; font-size: 1.3em; margin-top: 10px;">{{ $item->title }}</h3>
                                        <div class="text" style="font-size: 1em; color: #666; margin-top: 10px;">
                                            {{ $item->content }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </section>