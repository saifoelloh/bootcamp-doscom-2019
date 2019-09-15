@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Admin</h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href="{{route('admin.create')}}">

                Tambah Admin
            </a>
        </h3>
    </div>
</div>
@stop
{{-- 
@section('content')
<div class="box-body box box-danger">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button class="btn btn-warning mr-3">Edit</button> <button class="btn btn-danger">Hapus</button></td>
    </tr>
  </tbody>
</table>
</div>
<div class="Pagination_halaman">
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
@stop --}} 
 

@section('content')
    <div class="box box-danger">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                            <tr>
                                {{-- <th class="text-center">No</th> --}}
                                <th class="text-center">Nama</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
       // {{--  console.log({!! $admin !!}) --}}
        $(document).ready(function () {
            $('.data-table').dataTable({
                data: {!! $dataUser!!},
                columns: [
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'password'},
                    {
                        data: 'id',
                        render: function(data){
                            const link ="{{route('admin')}}"+"/"+data;
                            const detail = '<a class="btn btn-primary btn-xs" stlye="margin: 0 3px" href="'+link+'">edit</a>';
                            const hapus = '<form role="form" action="'+link+'" stlye="margin: 0 3px;display:inline" method="POST">{{ csrf_field()}}{{method_field('delete')}}<button class="btn btn-danger btn-xs">delete</button></form>';
                            return '<div class="text-center">'+detail+hapus+'</div>';
                        }
                    },
                ],
            });
        });
    </script>
@stop