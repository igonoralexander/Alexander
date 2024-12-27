@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Admin Management')

@section('content')
      <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Blog</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.blog-posts') }}">View All Blogs</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">Blog Post</a></li>
              </ul>
            </div>
                
              <!-- Listing -->
              <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="card h-100 shadow-sm">
                                @if($blogPost->cover_image)
                                    <img src="{{ asset($blogPost->cover_image) }}" class="card-img-top small-image" style = "width: 400px;" alt="{{ $blogPost->title }}">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $blogPost->title }}</h5>
                                    <p class="card-text">{!! $blogPost->content !!}</p>
                                    <p><strong>Author:</strong> {{ $blogPost->admin->full_name }}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <a href = "{{ route ('admin.blog-posts.edit', $blogPost->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href ="{{ route ('admin.blog-posts.destroy', $blogPost->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
              </div>

          </div>
        </div>
      </div>

@endsection