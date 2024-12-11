 <!--How we work Section-->
 <section class="featured-section">
            <div class="auto-container">
                <div class="featured-row">

                    <div class="sec-title centered" style = "margin-top: 60px; margin-bottom: 40px;">
                        <h2>How we work</h2>
                        <p class="intro-text">A seamless process focused on collaboration, quality, and results.</p>
                    </div>
                    <div class="row clearfix">
                        @foreach ($howwework as $item)
                        <!-- Feature Block -->
                            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                                <div class="inner-box" style="text-align: center; padding: 10px;">
                                    
                                    <div class="icon-box" style="font-size: 35px; color: #287F47;">
                                        <i class="{{ $item-> icon }}"></i>
                                    </div>

                                    <div class="lower-content">
                                        <h3 style="font-weight: bold; font-size: 1.3em; margin-top: 10px;"> {{ $item-> title }} </h3>
                                        <div class="text" style="font-size: 1em; color: #666; margin-top: 10px;">
                                            {{ $item->content }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>                    
                </div>
                <div class="bottom-info">
                        <div class="link-box" style="text-align: center; margin-bottom: 50px;">
                            <a href="/how-we-work" class="theme-btn btn-style-five">
                                <span class="btn-title">Discover More</span>
                            </a>
                        </div>
                </div>
            </div>
</section>