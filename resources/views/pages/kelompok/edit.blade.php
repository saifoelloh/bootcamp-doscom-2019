
{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Edit Kelompok')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit kelompok<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a type="button" class="btn btn-info" href="{{route('kelompok')}}">

                Kembali
            </a>
        </h3>
    </div>
</div>
@stop

@section('content')
    <div class="box box-danger">
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('kelompok.update', $kelompok->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label for="namaKelompok">Nama Kelompok</label>
                            <input type="text" class="form-control" name="nama" value="{{$kelompok->nama}}" placeholder="nama kelompok" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="namaPendamping">Nama Pendamping</label>
                            <input type="text" class="form-control" name="pendamping" value="{{$kelompok->pendamping}}" placeholder="nama pendamping">
                        </div>
                        <button type="submit" class="btn btn-info">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop