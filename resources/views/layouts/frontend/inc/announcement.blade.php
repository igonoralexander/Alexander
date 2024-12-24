        <!-- Top Bar -->
        <div class="tf-top-bar bg_white line">
            <div class="px_15 lg-px_40">
                <div class="global-reset tf-top-bar_wrap grid-3 gap-30 align-items-center">
                    <ul class="tf-top-bar_item tf-social-icon d-flex gap-10">
                        <li><a href="{{ $contact->linkedin }}" target="_blank" class="box-icon w_28 round social-linkedin bg_line"><i class="fab fa-linkedin fs-14"></i></a></li>
                        <li><a href="{{ $contact->github }}" target="_blank" class="box-icon w_28 round social-github bg_line"><i class="fab fa-github fs-14"></i></a></li>
                    </ul>
                    <div class="text-center overflow-hidden">
                        <div dir="ltr" class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true" data-speed="1000" data-delay="2000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <p class="top-bar-text fw-5" style = "font-size: 11px;">Let's create something exceptional together.<a href="/contact" title="all collection" class="tf-btn btn-line">Get in touch<i class="icon icon-arrow1-top-left"></i></a></p>
                                </div>
                                <div class="swiper-slide">
                                    <p class="top-bar-text fw-5" style = "font-size: 11px;">Expert in Laravel, React, and cutting-edge web technologies.</p>
                                </div>
                                <div class="swiper-slide">
                                    <p class="top-bar-text fw-5" style = "font-size: 11px;">Building innovative web solutions for over 5 years.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="top-bar-language tf-cur justify-content-end">
                        <div class="tf-languages">
                            <select class="image-select center style-default type-languages">
                                <option>English</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->