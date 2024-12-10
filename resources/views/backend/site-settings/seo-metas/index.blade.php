@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: $sitesettings->site_title ' - Admin Management')

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
                <li class="nav-item"><a href="#">SEO Meta </a></li>
              </ul>
            </div>
            <div class="row">
                <livewire:seo-meta-manager />
            </div>
          </div>
        </div>
      </div>

@endsection