@extends('layout.container')

@section('content')
    <h1>Register Siswa</h1>
    <hr/>
    <div class="well">
        <form class="form-horizontal" action="{{action('auth.register')}}" method="post">
            <fieldset>
                @include('auth.include.previous_data')
                <div class="form-group">
                    <label for="nisn" class="col-md-2 control-label">NISN</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nisn" name="nisn">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-md-2 control-label">Nama</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan" class="col-md-2 control-label">Jurusan</label>
                    <div class="col-md-10">
                        <select name="jurusan" id="jurusan" class="form-control">
                            @foreach($kompetensiKeahlian as $row)
                            <option value="{{$row->id}}">{{$row->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-10">
                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir" class="col-md-2 control-label">Tanggal Lahir</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-md-2 control-label">Foto (temp only link)</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection