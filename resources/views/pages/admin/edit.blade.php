@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Admin<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a type="button" class="btn btn-info" href="{{route('admin')}}">

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
                        <form action="{{ route('admin.update', $admin->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{$admin->name}}" placeholder="nama " autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" name="email" value="{{$admin->email}}" placeholder="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">Nama Pendamping</label>
                            <input type="password" class="form-control" name="password" value="{{$admin->password}}" placeholder="password">
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

{{-- 
@section('content')
<div class="edit box box-danger">
    <div class="box-body row">
    <form class="col-md-6" action="{{ url('admin/') }}" method="POST">
        <form action="{{route('admin.update', $admin->id)}}" method="post">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
    </div>    
</div>
@stop --}}