@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Admin Management')

@section('content')
        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3"> Pages</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Admin Management</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">About Us Page</a></li>
              </ul>
            </div>
            <div class="row">
                <!-- Add Form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4> Edit About Us Page</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.about-us.update', $aboutus->id) }}" method = "POST">
                            @method('PUT')
                            @csrf

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <div class="form-group">
                                <label for="main_title">Main Title</label>
                                <input type="text" name="main_title" value = "{{ old('main_title', $aboutus->main_title) }}" class="form-control" id="main_title" />
                                @error('main_title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="founder">Founder</label>
                                <input type = "text" name="founder" value = "{{ old('founder', $aboutus->founder) }}"  class="form-control" id="founder" />
                                @error('founder') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="content-editor">Who We Are</label>
                                <textarea id = "content-editor" class="form-control" rows = "50">{{ old('who_we_are', $aboutus->who_we_are) }}</textarea>
                                <input type="hidden" name="who_we_are" id="who_we_are">
                                @error('who_we_are') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <button type = "submit" class="btn btn-primary"> Update </button>
                            <a href = "{{ route('admin.about-us') }}" class="btn btn-secondary">Back </a>
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
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | code',
                setup: function(editor) {
                    // Before form submission, copy TinyMCE content to the hidden input
                    editor.on('change', function () {
                        document.getElementById('who_we_are').value = editor.getContent();
                    });
                }
            });
        });
    </script>
@endsection