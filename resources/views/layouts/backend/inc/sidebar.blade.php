@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Request;
@endphp

<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="/" class="logo"> <img src="{{ asset('storage/' . $logo) }}" alt="navbar brand" class="navbar-brand" height="30"/></a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a href="{{route ('admin.dashboard') }}" class="collapsed" aria-expanded="false"> <i class="fas fa-home"></i> <p>Dashboard</p></a>
              </li>

              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Management</h4>
              </li>

              <li class="nav-item {{ Route::is('admin.gallery-index') ? 'active' : '' }}">
                <a href="{{route ('admin.gallery-index') }}">
                  <i class="fas fa-images"></i><p>Galleries</p></a>
              </li>
              
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Site Essentials</h4>
              </li>
              
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#landing-page">
                  <i class="fas fa-home"></i>
                  <p>Landing Page</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ Request::routeIs(
                                                          'admin.main-slider-index',
                                                          'admin.about-section-create',
                                                          'admin.services-section-create',
                                                          'admin.why-choose-us',
                                                          'admin.clients',
                                                          'admin.tech-stacks',
                                                          'admin.testimonial-index',
                                                          'admin.volunters-index') ? 'show' : ''}}" id="landing-page">

                  <ul class="nav nav-collapse">
                   
                    <li class=" {{ Route::is('admin.main-slider-index') ? 'active' : '' }}">
                      <a href="{{ route ('admin.main-slider-index') }}"><span class="sub-item">Hero Section</span></a>
                    </li>

                    <li class=" {{ Route::is('admin.about-section-create') ? 'active' : '' }}">
                      <a href="{{route ('admin.about-section-create') }}"><span class="sub-item">About Section</span></a>
                    </li>

                    <li class=" {{ Route::is('admin.services-section-create') ? 'active' : '' }}">
                      <a href="{{route ('admin.services-section-create') }}"><span class="sub-item">Services Section</span></a>
                    </li>

                    <li class=" {{ Route::is('admin.why-choose-us') ? 'active' : '' }}">
                      <a href="{{route ('admin.why-choose-us') }}"><span class="sub-item">Why Choose Us Section</span></a>
                    </li>

                    <li class=" {{ Route::is('admin.tech-stacks') ? 'active' : '' }}">
                      <a href="{{route ('admin.tech-stacks') }}"><span class="sub-item">Tech Stacks Section</span></a>
                    </li>


                    <li class=" {{ Route::is('admin.testimonial-index') ? 'active' : '' }}">
                      <a href="{{route ('admin.testimonial-index') }}"><span class="sub-item">Testimonial Section</span></a>
                    </li>

                    <li class=" {{ Route::is('admin.clients') ? 'active' : '' }}">
                      <a href="{{route ('admin.clients') }}"><span class="sub-item">Clients Section</span></a>
                    </li>

                  </ul>

                </div>
              </li>
  
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pages">
                  <i class="fas fa-book"></i>
                  <p>Pages</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ Request::routeIs(
                                                          'admin.contact-create',
                                                          'admin.about-us',
                                                          'admin.services-section-create',
                                                          'admin.faq-index',
                                                          'admin.terms-conditions',
                                                          'admin.privacy-policy') ? 'show' : '' }}" id="pages">
                  <ul class="nav nav-collapse">
                   
                    <li class=" {{ Route::is('admin.about-us') ? 'active' : '' }}">
                      <a href="{{route ('admin.about-us') }}"><span class="sub-item">About Us</span></a>
                    </li>

                    <li class=" {{ Route::is('admin.contact-create') ? 'active' : '' }}">
                      <a href="{{route ('admin.contact-create') }}"><span class="sub-item">Contact Us</span></a>
                    </li>

                    <li class=" {{ Route::is('admin.services-section-create') ? 'active' : '' }}">
                      <a href="{{route ('admin.services-section-create') }}"><span class="sub-item">Services </span></a>
                    </li>

                    <li class=" {{ Route::is('admin.faq-index') ? 'active' : '' }}">
                      <a href="{{route ('admin.faq-index') }}"><span class="sub-item">FAQs </span></a>
                    </li>

                    <li class=" {{ Route::is('admin.terms-conditions') ? 'active' : '' }}">
                      <a href="{{route ('admin.terms-conditions') }}"><span class="sub-item">Terms and Conditions </span></a>
                    </li>

                    <li class=" {{ Route::is('admin.privacy-policy') ? 'active' : '' }}">
                      <a href="{{route ('admin.privacy-policy') }}"><span class="sub-item">Privacy Policy </span></a>
                    </li>

                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#blog">
                  <i class="fas fa-newspaper"></i>
                  <p>Blog</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ Request::routeIs(
                                                          'admin.blog-category',
                                                          'admin.blog-posts',
                                                          'admin.blog-posts.create') ? 'show' : '' }}" id="blog">
                  <ul class="nav nav-collapse">
                   
                   <li class=" {{ Route::is('admin.blog-category') ? 'active' : '' }}">
                      <a href="{{route ('admin.blog-category') }}"><span class="sub-item">Blog Category</span></a>
                   </li>

                   <li class=" {{ Route::is('admin.blog-posts') ? 'active' : '' }}">
                      <a href="{{route ('admin.blog-posts') }}"><span class="sub-item">All Blog Posts</span></a>
                    </li>


                    <li class=" {{ Route::is('admin.projects.create') ? 'active' : '' }}">
                      <a href="{{route ('admin.blog-posts.create') }}"><span class="sub-item">Add Blog Posts</span></a>
                    </li>

                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#projects">
                  <i class="fas fa-tasks"></i>
                  <p>Projects</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ Request::routeIs(
                                                          'admin.project-category',
                                                          'admin.projects',
                                                          'admin.projects.create') ? 'show' : '' }}" id="projects">
                  <ul class="nav nav-collapse">
                   
                   <li class=" {{ Route::is('admin.project-category') ? 'active' : '' }}">
                      <a href="{{route ('admin.project-category') }}"><span class="sub-item">Add Project Category</span></a>
                   </li>

                   <li class=" {{ Route::is('admin.projects') ? 'active' : '' }}">
                      <a href="{{route ('admin.projects') }}"><span class="sub-item">All Projects</span></a>
                    </li>
                    

                    <li class=" {{ Route::is('admin.projects.create') ? 'active' : '' }}">
                      <a href="{{route ('admin.projects.create') }}"><span class="sub-item">Add Projects</span></a>
                    </li>

                  </ul>
                </div>
              </li>

              <li class="nav-item {{ Route::is('admin.seo-metas-index') ? 'active' : '' }}"><a href="{{route ('admin.seo-metas-index') }} "><i class="fas fa-search"></i> <p>SEO Metas</p> </a>
              </li>

              <li class="nav-item {{ Route::is('admin.site-settings-index') ? 'active' : '' }}"><a href="{{route ('admin.site-settings-index') }} "><i class="fas fa-cog"></i> <p>Site Settings</p> </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
<!-- End Sidebar -->