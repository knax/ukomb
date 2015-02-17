@extends('layout.container')

@section('content')
    <h1>List Table</h1>
    <hr/>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>Nama Table</th>
        </tr>
        </thead>
        <tbody>
        @foreach($table['list'] as $row)
            <tr>
                <td><a href="{{action('admin.crud.index', ['tables' => $row])}}">{{$row}}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr/>
@endsection