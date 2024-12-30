@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: $setting->site_title . ' - Admin Management')

@section('content')
        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3"> Project </h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{route ('admin.projects') }}">View All Projects</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">Edit Project</a></li>
              </ul>
            </div>
            <div class="row">
                <!-- Add/Edit Form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4> Edit</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.projects.update', $project->id) }}" method = "POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <div class="form-group">
                                <label for="projectCategory">Project Category</label>
                                <select name="category_id" class="form-control" id="projectCategory">
                                    @if ($project->projectcategory)
                                        <option value="{{ $project->projectcategory->id }}" selected>
                                            {{ $project->projectcategory->name }}
                                        </option>
                                    @endif
                                    
                                    @foreach ($projectCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" name="name" value = "{{ old('name', $project->name) }}" class="form-control" id="name" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Link</label>
                                <input type="text" name="link" value = "{{ old('link', $project->link) }}" class="form-control" id="link" />
                                @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image"accept="image/*"  />
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                <small>Current image: <a href="{{ asset($project->image) }}" target="_blank">View</a></small>
                            </div>

                            <div class="form-group">
                                <label for="content-editor">Content</label>
                                <textarea id = "content-editor" class="form-control" rows = "50">{{ old('content', $project->content) }}</textarea>
                                <input type="hidden" name="content" id="content">
                                @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <button type = "submit" class="btn btn-primary"> Update </button>
                            <a href = "{{ route('admin.projects') }}" class="btn btn-secondary">Back </a>
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
                plugins: 'link image code lists',
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | image code',
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