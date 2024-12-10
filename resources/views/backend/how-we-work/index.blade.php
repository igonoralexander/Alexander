@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Admin Management')

@section('content')
      <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Landing Page</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{route ('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Pages</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">How We Work Page</a></li>
              </ul>
            </div>
                
              <!-- Listing -->
              <div class="row">
                @if(!empty($howweworkpages) && $howweworkpages->isNotEmpty())
                    @foreach($howweworkpages as $item)
                        <div class="col-md-12 mb-12">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->main_title }}</h5>
                                    <p class="card-text">{!! $item->content !!}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <a href = "{{ route ('admin.how-we-work.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No How We work available. Please add one..</p>
                    <a href = "{{ route ('admin.how-we-work.create') }}" class="btn btn-info btn-sm">Add </a>
                @endif
              </div>

          </div>
        </div>
      </div>

@endsection