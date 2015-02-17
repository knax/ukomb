@extends('layout.container')

@section('content')
    <h1>Register</h1>
    <hr/>
    <div class="well">
        <form class="form-horizontal" action="{{action('auth.register.next')}}" method="post">
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
                    <label for="confirm_password" class="col-md-2 control-label">Confirm Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="type" class="col-md-2 control-label">Type</label>
                    <div class="col-md-10">
                        <select class="form-control" name="type" id="type">
                            <option value="guru">Guru</option>
                            <option value="siswa">Siswa</option>
                            <option value="wali_murid">Wali Murid</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection