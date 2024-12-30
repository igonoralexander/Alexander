@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Admin Management')

@section('content')
      <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Project</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.projects') }}">View All Projects</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">Project</a></li>
              </ul>
            </div>
                
              <!-- Listing -->
              <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="card h-100 shadow-sm">
                                @if($project->image)
                                    <img src="{{ asset($project->image) }}" class="card-img-top small-image" style = "width: 400px;" alt="{{ $project->name }}">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $project->name }}</h5>
                                    <p class="card-text">{!! $project->content !!}</p>
                                    <p><strong>Link:</strong> {{ $project->link }}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <a href = "{{ route ('admin.projects.edit', $project->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href ="{{ route ('admin.projects.destroy', $project->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
              </div>

          </div>
        </div>
      </div>

@endsection