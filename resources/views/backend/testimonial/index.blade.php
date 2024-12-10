@extends('layouts.backend.admin')
@section('content')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

 <a href = "{{route ('admin.dashboard') }}"> <h1 class="btn btn-primary mb-3" style = "color: white;"><b> Dashboard </b></h1></a>
<!-- Page Heading -->
<p class="mb-4"> </p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Testimonial
            <a href = "{{ route ('admin.testimonial-create')}}" class = "float-right btn btn-success btn-sm">Add Testimonial </a>
        </h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Testimonial</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Testimonial</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if($testimonial)
                        @foreach($testimonial as $item)   
                            <tr>
                                <td>{{ $item->name }}</td>  
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->testimonial }}</td>
                                
                                <td>
                                    <a href = "{{route ('admin.testimonial-show', $item->id) }}" class = "btn btn-info btn-sm"> <i class = "fa fa-eye" Show></i></a>
                                </td>

                                <td>
                                    <a href = "{{ route ('admin.testimonial-edit', $item->id) }}" class = "btn btn-primary btn-sm"><i class = "fa fa-edit" Edit></i></a>
                                </td>
                                
                                <td> 
                                    <a onclick = "return confirm('Are You Sure you want to Delete?')" href = "{{route ('admin.testimonial-delete', $item->id) }}" class = "btn btn-danger btn-sm"><i class = "fa fa-trash" Delete></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection