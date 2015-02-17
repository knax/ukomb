@extends('layout.container')

@section('content')
    @if(!Auth::user()->active)
        <div class="alert alert-warning" role="alert">Akun anda belum dikonfirmasi</div>
    @endif
    Welcome {{Auth::user()->username}}
@endsection