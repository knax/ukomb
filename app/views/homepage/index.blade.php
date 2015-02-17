@extends('layout.container')

@section('content')
    @if(!Auth::user()->confirmed)
        <div class="alert alert-warning" role="alert">Akun anda belum dikonfirmasi</div>
    @endif
    Welcome {{Auth::user()->username}}
@endsection