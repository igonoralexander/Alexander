<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <div class="widget-inner">
                                <h3>Search</h3>
                                <div class="widget-content">
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="Search" required>
                                            <button type="submit"><span class="icon fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- About -->
                        <div class="sidebar-widget about-widget">
                            <a href = "/aboutus">
                                <div class="widget-inner">
                                    <h3> About</h3>
                                    <div class="widget-content" style = "color: black;">
                                        <div class="text">{{ Str::limit ($aboutsection->description, 172) }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-inner">
                                <h3>Categories</h3>
                                <div class="widget-content">
                                    <ul>
                                        @foreach($categorys as $item)
                                            <li><a class="clearfix" href="{{ route('blog.details', $item->slug) }}"> {{$item->name}} <span class="count">{{ $item->blogposts_count }} </span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div> 

                        <!-- Most read post Widget -->
                        <div class="sidebar-widget recent-donors">
                            <div class="widget-inner">
                                <h3>Most Read Articles</h3>
                                <div class="widget-content">
                                    @foreach($mostReadPosts as $item)
                                        <div class="post">
                                            <div class="post-inner">
                                                <figure class="post-thumb"><a href="{{ route('blog.details', $item->slug) }}"><img src="{{ asset($item->cover_image)}}" alt=""></a></figure>
                                                <h5 class="donor-name"><a href="{{ route('blog.details', $item->slug) }}">{{ $item->title }}</a></h5>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        
                        @if(isset($relatedPosts) && $relatedPosts->isNotEmpty())
                         <!-- Related post Widget -->
                         <div class="sidebar-widget recent-donors">
                            <div class="widget-inner">
                                <h3>Related Articles</h3>
                                <div class="widget-content">
                                    @foreach($relatedPosts as $item)
                                        <div class="post">
                                            <div class="post-inner">
                                                <figure class="post-thumb"><a href="{{ route('blog.details', $item->slug) }}"><img src="{{ asset($item->cover_image)}}" alt=""></a></figure>
                                                <h5 class="donor-name"><a href="{{ route('blog.details', $item->slug) }}">{{ $item->title }}</a></h5>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Tags Widget -->
                        <div class="sidebar-widget popular-tags">
                            <div class="widget-inner">
                                <h3>Tags</h3>
                                <div class="widget-content">
                                    <ul>
                                        @foreach($tags as $item)
                                            <li><a href="#">{{ $item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
                <!--End Sidebar Side-->