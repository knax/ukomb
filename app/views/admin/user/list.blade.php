@extends('layout.container')

@section('content')
    <h1>List user</h1>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>Username</th>
            <th>Active</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->username}}</td>
                <td>{{($user->active) ? 'Ya' : 'Belum'}}</td>
                <td>{{$user->type}}</td>
                <td>
                    @if($user->active)
                        <a class="btn btn-warning" href="{{action('admin.user.deactivate', ['id' => $user->id])}}">Deactivate</a>
                    @else
                        <a class="btn btn-success" href="{{action('admin.user.activate', ['id' => $user->id])}}">Activate</a>
                    @endif
                    <a class="btn btn-danger" href="{{action('admin.user.delete', ['id' => $user->id])}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection