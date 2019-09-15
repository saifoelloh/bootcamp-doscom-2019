@extends('layouts.app')
@section('content')
@if(session()->get('message'))
<div class="alert alert-success">
  {{ session()->get('message') }}
</div>
@endif
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h3>Pendaftaran</h3>
          </div>
          <form action="{{route('peserta.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group row">
              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="nim" name="nim">
                {!! $errors->first('nim', '<p class="help-block text-danger">:message</p>') !!}
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="nama" name="nama">
                {!! $errors->first('nama', '<p class="help-block text-danger">:message</p>') !!}
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="email" name="email">
                {!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
              </div>
            </div>
            <div class="form-group row">
              <label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="telephone" name="telephone">
                {!! $errors->first('telephone', '<p class="help-block text-danger">:message</p>') !!}
              </div>
            </div>
            <div class="form-group row">
              <label for="telegram" class="col-sm-2 col-form-label">Telegram</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="telegram" name="telegram">
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <label class="col-form-label col-sm-2 pt-0">Gender</label>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="radio" value="laki-laki" checked>
                    <label class="form-check-label" for="radio">
                      Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="radio" value="perempuan">
                    <label class="form-check-label" for="radio">
                      Perempuan
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop