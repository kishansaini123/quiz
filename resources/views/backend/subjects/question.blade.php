@extends('layouts.backend')
@section('page-title')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Subject</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Subject</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('content')
<div class="row">
     <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="card-title">Subject</h6>
              
            </div>

            {{-- <div class="card-body">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Subject Id</th>
                            <th>Subject Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
@foreach($subject as $data)
                    <thead>
                        <tr>
                            <th>{{$data['id']}}</th>
                            <th>{{$data['subject']}}</th>
                            <th><a class="btn btn-danger" href={{("delete/").$data['id']}}>Del</a><a href={{'subjectedit/'.$data['id']}}><button type="button" class="btn btn-primary">Edit</button></a></th>
                        </tr>
                    </thead>
                    @endforeach

                    
                </table>
                
                
            </div> --}}

        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <form method="post" action="{{route('subject.store')}}">
            @csrf
        <div class="card shadow">
            <h6 class="card-header"> Add Questions  </h6>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Questions Title</label>
                    <input type="text" name="subject" class="form-control " id="subject" placeholder="Enter Subject">
                    
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-info">Add New Subject</button>
                </div>

            </div>
        </div>
    </div>
</form>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    window.addEventListener('hide-category-modal', event => {
        toastr.success(event.detail.msg);
    });
</script>
@endsection