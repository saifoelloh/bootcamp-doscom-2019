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
        <table class="data-table table table-bordered table-hover text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Status</th>
              <th>Kelompok</th>
              <th>Actions</th>
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
      columns: [
        {
          data: 'id',
          render: function(data) {
            return arguments[3].row += 1;
          },
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
            return data!==null ? data.nama : 'none';
          }
        },
        {
          data: 'id',
          render: function(data) {
            const link = "{{route('peserta')}}"+"/"+data;
            const detail = '<a class="btn btn-primary btn-xs" stlye="margin: 0 3px" href="' + link + ' ">edit</a>';
            const hapus = '<form role="form" action="' + link + '" style="margin: 0 3px;display:inline" method="POST">{{ csrf_field()}}{{method_field('delete ')}}<button class="btn btn-danger btn-xs">delete</button></form>';
            return '<div class="text-center">' + detail + hapus + '</div>';
          }
        },
      ]
    });
  });
</script>
@stop
