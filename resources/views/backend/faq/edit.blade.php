@extends('layouts.backend.admin')
@section('content')
    
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit FAQ</h6>
        <a href = "{{route('admin.faq-index')}}" class = "float-right btn btn-success btn-sm">Back </a>
    </div>
    <div class="card-body">    
        @if(Session::has('success') ) 
            <p class = "text-success">{{ session('success') }}</p>
        @endif
        <div class="table-responsive">
            <form method="POST" action="{{route('admin.faq-update', $faq->id) }}">
                @method('PUT')    
                @csrf
                <table class="table table-bordered">
                        
                        <tr>
                            <th>Question</th>
                                <td> 
                                    <input type="text" name = "question"  id="question" value="{{ $faq->question }}" class = "form-control" />
                                </td> 
                        </tr>

                        <tr>
                            <th>Answer</th>    
                            <td> 
                                <textarea style="height: 100px;" name = "answer" class = "form-control" > {{ $faq->answer }} </textarea>
                            </td>
                        </tr>

                        <tr>    
                            <td colspan = "2"> 
                                <input type = "submit" class = "btn btn-primary" value = "Update"/>
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