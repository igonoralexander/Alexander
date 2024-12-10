@extends('layouts.backend.admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Admin Dashboard')

@section('content')
    
<div class="container">
          <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div> <h3 class="fw-bold mb-3">Dashboard</h3> </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-primary btn-round">Add</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Messages</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                            <a class="dropdown-item" href="{{route ('admin.contact-view') }}">View All</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="">Email</th>
                            <th scope="col" class="">Phone</th>
                            <th scope="col" class="">Subject</th>
                            <th scope="col" class="">Message</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($latestcontact as $contact)
                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                              <th scope="row">{{$contact->name}}</th>
                              <td class="">{{$contact->email}}</td>
                              <td class="">{{$contact->phone}}</td>
                              <td class="">{{$contact->subject}}</td>
                              <td class="">{{$contact->content}}</td>
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

            <div class="row">

              <div class="col-md-12">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Our Team Members</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                            <a class="dropdown-item" href="">View All</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                          <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="">Title</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($volunters as $volunter)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <th scope="row">{{$volunter->name}}</th>
                              <td class="">{{$volunter->title}}</td>
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
                
@endsection

