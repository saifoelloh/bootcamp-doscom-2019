@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')
<div class="edit box box-danger">
    <div class="box-body row">
    <form class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
    </div>    
</div>
@stop