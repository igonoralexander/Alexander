@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Admin Management')

@section('content')
    
<div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Industries We Serve</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Pages</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">Industries We Serve</a></li>
              </ul>
            </div>
                
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <div class="card-title">Industries We Serve</div>
                                    <div class="card-tools">
                                        <div class="dropdown">
                                            <a href="{{route ('admin.industry.create') }}" class="btn btn-primary btn-round">Add</a>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <!-- Industry table -->
                                    <table class="table align-items-center mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col" class="">Name</th>
                                            <th scope="col" class="">Description</th>
                                            <th scope="col" class="">View</th>
                                            <th scope="col" class="">Edit</th>
                                            <th scope="col" class="">Delete</th>
                                            </tr>
                                        </thead>

                                    <tbody>
                                        @foreach($industries as $industry)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <th scope="row">{{$industry->name}}</th>
                                            <td class="">{{$industry->description}}</td>
                                            <td class = "">
                                                <a href = "{{route ('admin.industry.show', $industry->id) }}" class = "btn btn-info btn-sm"> <i class = "fa fa-eye" Show></i></a>
                                            </td>
                                            <td class="">
                                                <a href = "{{ route ('admin.industry.edit', $industry->id) }}" class = "btn btn-primary btn-sm"><i class = "fa fa-edit" Edit></i></a>
                                            </td>
                                            <td class = ""> 
                                                <a onclick = "return confirm('Are You Sure you want to Delete?')" href = "{{route ('admin.industry.delete', $industry->id) }}" class = "btn btn-danger btn-sm"><i class = "fa fa-trash" Delete></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>

@endsection