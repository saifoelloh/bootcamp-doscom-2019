@extends('adminlte::page')

@section('title', 'Edit peserta')

@section('content_header')
<div class="row">
  <div class="col-md-6">
    <h3>Edit Peserta<h3>
  </div>
  <div class="col-md-6 text-right">
    <h3>
      <a type="button" class="btn btn-info" href="{{route('peserta')}}">
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
          <form action="{{ route('peserta.update', $pesertas->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group">
              <label for="nimPeserta">NIM</label>
              <input type="text" class="form-control" name="nim" value="{{$pesertas->nim}}" placeholder="nim Peserta" autofocus>
            </div>
            <div class="form-group">
              <label for="namaPeserta">Nama</label>
              <input type="text" class="form-control" name="nama" value="{{$pesertas->nama}}" placeholder="nama Peserta" autofocus>
            </div>
            <div class="form-group">
              <label for="emailPeserta">Email</label>
              <input type="text" class="form-control" name="email" value="{{$pesertas->email}}" placeholder="email Peserta" autofocus>
            </div>
            <div class="form-group">
              <label for="telephonePeserta">Telephone</label>
              <input type="text" class="form-control" name="telephone" value="{{$pesertas->telephone}}" placeholder="telephone Peserta" autofocus>
            </div>
            <div class="form-group">
              <label for="telegramPeserta">Telegram</label>
              <input type="text" class="form-control" name="telegram" value="{{$pesertas->telegram}}" placeholder="telegram Peserta" autofocus>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <label class="col-form-label col-sm-2 pt-0">Gender</label>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="laki-laki" {{($pesertas->gender == "laki-laki") ? "checked" : "" }}>
                    <label class="form-check-label" for="gender1">
                      Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="perempuan" {{($pesertas->gender == "perempuan") ? "checked" : "" }}>
                    <label class="form-check-label" for="gender2">
                      Perempuan
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset class="form-group">
              <div class="row">
                <label class="col-form-label col-sm-2 pt-0">Status</label>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status1" value="daftar" {{($pesertas->status == "daftar") ? "checked" : "" }}>
                    <label class="form-check-label" for="status1">
                      Daftar
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status2" value="lunas" {{($pesertas->status == "lunas") ? "checked" : "" }}>
                    <label class="form-check-label" for="status2">
                      Lunas
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group">
              <label for="kelompok">Kelompok</label>
              <select class="form-control mb-3" id="kelompok" name="kelompok_id">
                <option value="0">Pilih--</option>
                @foreach($kelompoks as $kelompok)
                  <option value="{{$kelompok->id}}" {{($pesertas->kelompok_id == $kelompok->id) ? "selected" : "" }}>{{$kelompok->nama}}</option>
                @endforeach
              </select>
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
<script>
  console.log('Hi!');
</script>
@stop