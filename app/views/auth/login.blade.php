@extends('layout.container')

@section('content')
    <h1>Login</h1>
    <hr/>
    <div class="well">
        <form class="form-horizontal" action="{{action('auth.login')}}" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="username" class="col-md-2 control-label">Username</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-2 control-label">Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a class="btn btn-default" href="{{action('auth.register.form')}}">Register</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection