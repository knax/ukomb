@extends('layout.container')

@section('content')
    <dl>
        <dt>NIP</dt>
        <dd>{{$guru->nip}}</dd>
        <dt>Nama</dt>
        <dd>{{$guru->nama}}</dd>
        <dt>Alamat</dt>
        <dd>{{$guru->alamat}}</dd>
        <dt>Telepon</dt>
        <dd>{{$guru->telepon}}</dd>
    </dl>

    <a class="btn btn-primary" href="{{action('guru.data_diri.edit.form')}}">Edit</a>
@endsection