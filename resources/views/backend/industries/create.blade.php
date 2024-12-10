@extends('layouts.backend.admin')
@section('pageName', isset($pageName) ? $pageName: 'IG Software Nig - Admin Management')

@section('content')
        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3"> Industries We Serve </h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{route ('admin.industry.index') }}">View All</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">Add Industry We Serve</a></li>
              </ul>
            </div>
            <div class="row">
                <!-- Add/Edit Form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4> Add Industry</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.industry.store') }}" method = "POST" enctype="multipart/form-data">
                            @csrf

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value = "{{ old('name') }}" class="form-control" id="name" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="text" name="icon" class="form-control" id="icon"  />
                                @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="3">{{ old('description') }}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="content-editor">Content</label>
                                <textarea id = "content-editor" class="form-control" rows = "50">{{ old('content') }}</textarea>
                                <input type="hidden" name="content" id="content">
                                @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <button type = "submit" class="btn btn-primary"> Save </button>
                            <a href = "{{ route('admin.industry.index') }}" class="btn btn-secondary">Back </a>
                        </form>
                    </div>
                </div>

            </div>

          </div>
        </div>
      </div>

@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/98c6zzvvvtceziovup2bpqzd2wagxppu9xihyguo8jmch9o5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            tinymce.init({
                selector: '#content-editor',
                plugins: 'link icon code lists',
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | icon code',
                setup: function(editor) {
                    // Before form submission, copy TinyMCE content to the hidden input
                    editor.on('change', function () {
                        document.getElementById('content').value = editor.getContent();
                    });
                }
            });
        });
    </script>
@endsection