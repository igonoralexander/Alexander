@extends('layouts.backend.admin')
@section('content')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<a href = "{{route ('admin.dashboard') }}"> <h1 class="btn btn-primary mb-3" style = "color: white;"><b> Dashboard </b></h1></a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Volunters</h6>
        <a href = "{{ route ('admin.volunters-index')}}" class = "float-right btn btn-success btn-sm">Back </a>
    </div>
    <div class="card-body">    
        @if(Session::has('success') ) 
            <p class = "text-success">{{ session('success') }}</p>
        @endif
        <div class="table-responsive">
            <form method="POST" action="{{route('admin.add-volunters')}}" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                                <td> 
                                    <input type="text" name = "name"  id="name" value="{{ old('name') }}" class = "form-control" />
                                    @error('name')<span class = "text-danger">{{ $message }} </span>@enderror
                                </td> 
                        </tr>
                        
                        <tr>
                            <th>Title</th>
                                <td> 
                                    <input type="text" name = "title"  id="title" value="{{ old('title') }}" class = "form-control" />
                                    @error('title')<span class = "text-danger">{{ $message }} </span>@enderror
                                </td> 
                        </tr>

                     
                        <!-- <tr>
                            <th>Meta Title</th>
                                <td> 
                                    <input type="text" name = "meta_title" id="meta_title" value="{{ old('meta_title') }}" class = "form-control" />
                                </td> 
                        </tr> -->

                        <!-- <tr>
                            <th>Meta Keywords</th>    
                            <td> 
                                <textarea class = "form-control" name = "meta_keywords" value="{{ old('meta_keywords') }}" style="height: 100px;"> </textarea>
                            </td>
                        </tr> -->

                        <!-- <tr>
                            <th>Meta Description</th>    
                            <td> 
                                <textarea class = "form-control" name = "meta_descp" value="{{ old('meta_descp') }}" style="height: 100px;"> </textarea>
                            </td>
                        </tr> -->

                        <tr>
                            <th>Image*</th>
                                <td> 
                                    <input name = "image" id="image" type="file" class = "form-control"/>
                                    @error('image')<span class = "text-danger">{{ $message }} </span>@enderror
                                </td> 
                        </tr>

                        <tr>    
                            <td colspan = "2"> 
                                <input type = "submit" class = "btn btn-primary" value = "Add"/>
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