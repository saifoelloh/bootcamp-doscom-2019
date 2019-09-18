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

@section('content')
    <div class="box box-danger">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="data-table table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
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
                    {
                      data: 'id',
                      render: function(data) {
                        return arguments[3].row+=1;
                      },
                    },
                    {data: 'name'},
                    {data: 'email'},
                    {
                        data: 'id',
                        render: function(data){
                            const link ="{{route('admin')}}"+"/"+data;
                            const detail = '<a class="btn btn-primary btn-xs" stlye="margin: 0 3px" href="' + link + ' ">edit</a>';
                            const hapus = '<form role="form" action="' + link + '" style="margin: 0 3px;display:inline" method="POST">{{ csrf_field()}}{{method_field('delete ')}}<button class="btn btn-danger btn-xs">delete</button></form>';
                            return '<div>' + detail + hapus + '</div>';
                        }
                    },
                ],
            });
        });
    </script>
@stop
