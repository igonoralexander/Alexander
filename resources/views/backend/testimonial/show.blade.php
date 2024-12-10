@extends('layouts.backend.admin')
@section('content')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <a href = "{{route ('admin.dashboard') }}"> <h1 class="btn btn-primary mb-3" style = "color: white;"><b> Dashboard </b></h1></a>
<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$testimonial->name }}'s Testimonial </h6>
        <a href = "{{route('admin.testimonial-index')}}" class = "float-right btn btn-success btn-sm">Back </a>
    </div>
    <div class="card-body">    
        <div class="table-responsive">
                <table class="table table-bordered">
                       
                        <tr>
                            <th>Name</th>
                            <td> {{$testimonial->name}} </td> 
                        </tr>

                        <tr>
                            <th>Title</th>
                            <td> {{$testimonial->title}} </td> 
                        </tr>

                        <tr>
                            <th>Testimonial</th>
                            <td> {{$testimonial->testimonial}} </td> 
                        </tr>
                </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection