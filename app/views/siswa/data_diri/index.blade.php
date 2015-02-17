@extends('layout.container')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <img src="/images/siswa/{{$siswa->foto}}" alt="foto" class="img-responsive"/>
        </div>
        <div class="col-md-10">
            <dl>
                <dt>NISN</dt>
                <dd>{{$siswa->nisn}}</dd>
                <dt>Nama</dt>
                <dd>{{$siswa->nama}}</dd>
                <dt>Alamat</dt>
                <dd>{{$siswa->alamat}}</dd>
                <dt>Tanggal Lahir</dt>
                <dd id="tanggal_lahir">{{$siswa->tanggal_lahir}}</dd>
            </dl>

            <a class="btn btn-primary" href="{{action('siswa.data_diri.edit.form')}}">Edit</a>
        </div>
    </div>
@endsection