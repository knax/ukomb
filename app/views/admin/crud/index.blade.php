@extends('layout.container')

@section('content')
    <h1>{{$table['name']}}</h1>
    <hr/>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            @foreach($table['header'] as $header)
                <th>{{$header}}</th>
            @endforeach
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($table['body'] as $row)
            <tr>
                @foreach($row->toArray() as $cell)
                    <td>{{$cell}}</td>
                @endforeach
                <td>
                    <a class="btn btn-default" href="{{action('admin.crud.edit.form', ['table' => $table['name'], 'id' => $row->id])}}">Edit</a>
                    <a class="btn btn-danger" href="{{action('admin.crud.delete', ['table' => $table['name'], 'id' => $row->id])}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr/>
    {{$table['body']->links()}}
    <hr/>
    <a class="btn btn-primary" href="{{action('admin.crud.create.form', ['table' => $table['name']])}}">Create</a>
    <hr/>
@endsection