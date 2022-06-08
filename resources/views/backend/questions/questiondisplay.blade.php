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
<script>
 

    $('#datetime').datetimepicker({
        format: 'hh:mm:ss a'
    });
</script>
<div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="card-title">Question</h6>              
            </div>

             <div class="card-body">
                
                <table class="table table-striped m-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th> Title</th>
                            <th> Description</th>
                            <th> Type</th>
                            <th> Status</th>
                            <th> Position</th>
                            <th> Created At</th>
                        
                            <th>Action</th>
                        </tr>
                    </thead>

@foreach($question as $data)
                    <thead>
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$data->title}}</th>
                            <th>{{$data->desc}}</th>
                            <th>{{$data->type}}</th>
                            <th>{{$data->status}}</th>
                            <th>{{$data->position}}</th>
                            <th>{{$data->created_at->format('d-m-Y ') }}</th>
                        
                            <th>
                                <form action="{{route('question.destroy',$data->id)}}" method="post" style="display:inline-block">
                                    @csrf
                                    @method('delete')
    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                                <a href={{'/'.$data['id']}}><button type="button" class="btn btn-primary">Edit</button></a></th>
                        </tr>
                    </thead>
                    @endforeach
                </table>
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