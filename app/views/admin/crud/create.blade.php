@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$table['name']}}</h1>
                <hr/>
                <form action="{{action('admin.crud.create', ['table' => $table['name']])}}" method="post" class="form-horizontal">
                    <fieldset>
                        <legend>Create</legend>
                    @foreach($table['field'] as $field)
                        <div class="form-group">
                            <label for="{{$field}}" class="col-md-2 control-label">{{$field}}</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="{{$field}}" name="{{$field}}">
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
        </div>
    </div>
@endsection