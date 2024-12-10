@extends('layouts.backend.admin')
@section('content')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <a href = "{{route ('admin.dashboard') }}"> <h1 class="btn btn-primary mb-3" style = "color: white;"><b> Dashboard </b></h1></a>
<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$faq->question }}'s Detail </h6>
        <a href = "{{route('admin.faq-index')}}" class = "float-right btn btn-success btn-sm">Back </a>
    </div>
    <div class="card-body">    
        <div class="table-responsive">
                <table class="table table-bordered">
                       
                        <tr>
                            <th>Question</th>
                            <td> {{$faq->question}} </td> 
                        </tr>

                        <tr>
                            <th>Answer</th>
                            <td> {{$faq->answer}} </td> 
                        </tr>
                </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection