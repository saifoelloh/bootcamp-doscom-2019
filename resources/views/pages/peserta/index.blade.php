@extends('adminlte::page')
@section('title', 'Peserta')

@section('content_header')
<div class="row">
  <div class="col-md-6">
    <h3>Peserta</h3>
  </div>
</div>
@stop
@section('content')
<div class="box box-danger">
  <div class="box-body">
    <div class="row">
      <div class="col-md-12">
        <table class="data-table table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">NIM</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Email</th>
              <th class="text-center">Status</th>
              <th class="text-center">Kelompok</th>
              <th class="text-center">Actions</th>
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
  $(document).ready(function() {
    $('.data-table').dataTable({
      data: {!! $pesertas !!},
      columns: [{
          data: 'id'
        },
        {
          data: 'nim'
        },
        {
          data: 'nama'
        },
        {
          data: 'email'
        },
        {
          data: 'status'
        },
        {
          data: 'kelompok',
          render: function(data){
            return data.nama;
          }
        },
        {
          data: 'id',
          render: function(data) {
            const link = "{{route('peserta')}}"+"/"+data;
            const detail = '<a class="btn btn-primary btn-xs" stlye="margin: 0 3px" href="' + link + ' ">edit</a>';
            const hapus = '<form role="form" action="' + link + '" stlye="margin: 0 3px;display:inline" method="POST">{{ csrf_field()}}{{method_field('delete ')}}<button class="btn btn-danger btn-xs">delete</button></form>';
            return '<div class="text-center">' + detail + hapus + '</div>';
          }
        },
      ]
    });
  });
</script>
@stop