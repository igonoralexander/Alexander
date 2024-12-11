    <div class="top-right clearfix">
                                <ul class="social-links clearfix">
                                    <!-- <li><a href="{{route ('admin.login') }}"> <span class="icon fa fa-sign-in-alt"></span> Admin Login </a></li> -->
                                    <li>
                                        <div class="change-language">
                                            <div class="language dropdown"><a class="dropdown-toggle clearfix" id="lang-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">   Eng <span class="arrow flaticon-cheveron-down"></span></a>
                                                <ul class="dropdown-menu style-one" aria-labelledby="lang-dropdown">
                                                    <li><a href="#">Arabic</a></li>
                                                    <li><a href="#">Chinese</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                    <li><a href="#">English</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="social-links clearfix">
                                    <li><a href="{{ $contact->facebook_link }}"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="{{ $contact->twitter_link }}"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="{{ $contact->youtube_link }}"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="{{ $contact->instagram_link }}"><span class="fab fa-instagram"></span></a></li>
                                </ul>
    </div>