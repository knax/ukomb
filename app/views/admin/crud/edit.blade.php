@extends('layout.container')

@section('content')
    <h1>{{$table['name']}}</h1>
    <hr/>
    <div class="well">
        <form action="{{action('admin.crud.edit', ['table' => $table['name'], 'id' => $table['data']->id])}}" method="post" class="form-horizontal">
            <fieldset>
                <legend>Create</legend>
                @foreach($table['field'] as $field)
                    <div class="form-group">
                        <label for="{{$field}}" class="col-md-2 control-label">{{$field}}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="{{$field}}" name="{{$field}}" value="{{$table['data']->$field}}">
                        </div>
                    </div>
                @endforeach
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection