@extends('layouts.backend.admin')
@section('content')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<a href = "{{route ('admin.dashboard') }}"> <h1 class="btn btn-primary mb-3" style = "color: white;"><b> Dashboard </b></h1></a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add FAQ</h6>
        <a href = "{{ route ('admin.faq-index')}}" class = "float-right btn btn-success btn-sm">Back </a>
    </div>
    <div class="card-body">    
        @if(Session::has('success') ) 
            <p class = "text-success">{{ session('success') }}</p>
        @endif
        <div class="table-responsive">
            <form method="POST" action="{{route('admin.add-faq')}}">
                @csrf
                <table class="table table-bordered">
                        <tr>
                            <th>Question</th>
                                <td> 
                                    <input type="text" name = "question"  id="question" value="{{ old('question') }}" class = "form-control" />
                                    @error('question')<span class = "text-danger">{{ $message }} </span>@enderror
                                </td> 
                        </tr>
                        
                        <tr>
                            <th>Answer</th>    
                            <td> 
                                <textarea style="height: 100px;" name = "answer"  value="{{ old('answer') }}" class = "form-control" > </textarea>
                                @error('answer')<span class = "text-danger">{{ $message }} </span>@enderror
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