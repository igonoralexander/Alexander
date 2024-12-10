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
                <li class="nav-item"><a href="#">Admin Management</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li> 
                <li class="nav-item"><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
                
              <!-- Listing -->
              <div class="row">
                @if(!empty($PrivacyPolicy) && $PrivacyPolicy->isNotEmpty())
                    @foreach($PrivacyPolicy as $item)
                        <div class="col-md-12 mb-12">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <p class="card-text">{!! $item->content !!}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <a href = "{{ route ('admin.privacy-policy.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Privacy Policy found.</p>
                    <a href = "{{ route ('admin.privacy-policy.create') }}" class="btn btn-info btn-sm">Add Policy</a>
                @endif
              </div>

          </div>
        </div>
      </div>

@endsection