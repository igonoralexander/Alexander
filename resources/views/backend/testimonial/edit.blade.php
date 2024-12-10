@extends('layouts.backend.admin')
@section('content')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Testimonial</h6>
        <a href = "{{route('admin.testimonial-index')}}" class = "float-right btn btn-success btn-sm">Back </a>
    </div>
    <div class="card-body">    
        @if(Session::has('success') ) 
            <p class = "text-success">{{ session('success') }}</p>
        @endif
        <div class="table-responsive">
            <form method="POST" action="{{route('admin.testimonial-update', $testimonial->id) }}">
                @method('PUT')    
                @csrf
                <table class="table table-bordered">
                        
                        <tr>
                            <th>Name</th>
                                <td> 
                                    <input type="text" name = "name"  id="name" value="{{ $testimonial->name }}" class = "form-control" />
                                </td> 
                        </tr>

                        <tr>
                            <th>Title</th>
                                <td> 
                                    <input type="text" name = "title"  id="title" value="{{ $testimonial->title }}" class = "form-control" />
                                </td> 
                        </tr>

                        <tr>
                            <th>Testimonial</th>    
                            <td> 
                                <textarea style="height: 100px;" name = "testimonial" class = "form-control" > {{ $testimonial->testimonial }} </textarea>
                            </td>
                        </tr>

                        <tr>    
                            <td colspan = "2"> 
                                <input type = "submit" class = "btn btn-primary" value = "Update"/>
                            </td>
                        </tr>
                </table>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection