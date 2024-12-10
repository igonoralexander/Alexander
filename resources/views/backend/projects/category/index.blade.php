@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Admin Management')

@section('content')
        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3"> Projects </h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{route ('admin.projects') }}">View All Projects</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">Add Project Category </a></li>
              </ul>
            </div>
            <div class="row">
                <!-- Add/Edit Form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4> Add Project Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.project-category.store') }}" method = "POST" enctype="multipart/form-data">
                            @csrf

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" name="name" value = "{{ old('name') }}" class="form-control" id="name" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <button type = "submit" class="btn btn-primary"> Save </button>
                            <a href = "{{ route('admin.projects') }}" class="btn btn-secondary">Back </a>
                        </form>
                    </div>
                </div>

            </div>

          </div>
        </div>
      </div>

@endsection