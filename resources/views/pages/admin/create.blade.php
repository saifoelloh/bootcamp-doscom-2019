@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Tambah Admin</h1>
@stop

@section('content')
<div class="edit box box-danger">
    <div class="box-body row">
    <form class="col-md-6" action="{{ url('admin/') }}" method="POST">
            <form action="{{route('admin.store')}}" method="post">
                    {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="name" id="example = budi"  aria-describedby="emailHelp" placeholder="Enter Nama">
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
@stop