@extends('layout.container')

@section('content')
    <form class="form-horizontal" action="{{action('siswa.data_diri.edit')}}" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Edit</legend>
        <div class="form-group">
            <label for="nisn" class="col-md-2 control-label">NISN</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="nisn" name="nisn" value="{{$siswa->nisn}}">
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-md-2 control-label">Nama</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="nama" name="nama"  value="{{$siswa->nama}}">
            </div>
        </div>
        <div class="form-group">
            <label for="alamat" class="col-md-2 control-label">Alamat</label>
            <div class="col-md-10">
                <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10">{{$siswa->alamat}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir" class="col-md-2 control-label">Tanggal Lahir</label>
            <div class="col-md-10">
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$siswa->tanggal_lahir}}">
            </div>
        </div>
        <div class="form-group">
            <label for="foto" class="col-md-2 control-label">Foto</label>
            <div class="col-md-10">
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
            <hr/>
        </fieldset>
    </form>
@endsection