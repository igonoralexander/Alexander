@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: $setting->site_title . ' - Admin Management')

@section('content')
        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3"> Blog </h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{route ('admin.blog-posts') }}">View All Blogs</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">Add Blog Post</a></li>
              </ul>
            </div>
            <div class="row">
                <!-- Add/Edit Form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4> Add Blog Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.blog-posts.store') }}" method = "POST" enctype="multipart/form-data">
                            @csrf

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif


                            <div class="form-group">
                                <label for="blogCategory">Blog Category</label>
                                <select name="category_id" class="form-control" id="blogCategory">
                                    <option value="">-- Select Blog Category --</option>
                                    @foreach ($blogCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="tags">Tags (comma-seperated):</label>
                                <input type="text" name="tags" value = "{{ old('tags') }}" placeholder = "e.g., Laravel, PHP, Web Development" class="form-control" id="tags" />
                                @error('tags') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value = "{{ old('title') }}" class="form-control" id="title" />
                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="cover_image" class="form-control" id="cover_image"accept="image/*"  />
                                @error('cover_image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" value = "{{ old('meta_title') }}" class="form-control" id="meta_title" />
                                @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="meta_keywords">Meta Description</label>
                                <textarea name="meta_keywords" class="form-control" id="meta_keywords" rows="10">{{ old('meta_keywords') }}</textarea>
                                @error('meta_keywords') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" class="form-control" id="meta_description" rows="10">{{ old('meta_description') }}</textarea>
                                @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="content-editor">Blog Content</label>
                                <textarea id = "content-editor" class="form-control" rows = "50">{{ old('content') }}</textarea>
                                <input type="hidden" name="content" id="content">
                                @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <button type = "submit" class="btn btn-primary"> Save </button>
                            <a href = "{{ route('admin.blog-posts') }}" class="btn btn-secondary">Back </a>
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