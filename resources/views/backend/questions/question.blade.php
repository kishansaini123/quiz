@extends('layouts.backend')
@section('page-title')
<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Question</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Question</a></li>
            
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('content')
<div class="row">
     

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <form method="post" action="{{route('question.index')}}">
            @csrf
        <div class="card shadow">
            <h6 class="card-header"> Add Questions  </h6>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Questions Title</label>
                    <input type="text" name="title" class="form-control " id="title" placeholder="Enter Subject">
                    @error('title')
    <div class="form-control is-invalid">{{ $message }}</div>
    
@enderror

                    <label for="name">Questions Description</label>
                    <textarea class="form-control" name="desc"></textarea>
                    @error('desc')
                    <div class="form-control is-invalid">{{ $message }}</div>
                @enderror
                    <label for="name">Questions Type</label>
                    <input type="text" name="type" class="form-control " id="type" placeholder="Enter Subject">
                    @error('type')
                    <div class="form-control is-invalid">{{ $message }}</div>
                @enderror

                    {{-- <label for="name">Questions Status</label>
                    <input type="text" name="subject" class="form-control " id="subject" placeholder="Enter Subject"> --}}


                    <label for="category_id">Question Status</label>
                    
                    <select  class="form-control @error('status') is-invalid @enderror " name="status" id="status">
                        @error('status')
                                                <span class="inalid-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                @enderror

                        <option selected="">Select Question Category</option>
                                                <option value="1">True</option>
                                                <option value="0">False</option>
                                                
                                            </select>
                    <label for="name">Questions Position</label>
                    <input type="text" name="position" class="form-control " id="position" placeholder="Enter Subject">
                    @error('position')
                    <div class="form-control is-invalid">{{ $message }}</div>
                @enderror
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