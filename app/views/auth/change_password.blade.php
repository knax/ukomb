@extends('layout.container')

@section('content')
    <h1>Change Password</h1>

    <hr/>
    <div class="well">
        <form class="form-horizontal" action="{{action('auth.change_password')}}" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="current_password" class="col-md-2 control-label">Current Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="new_password" class="col-md-2 control-label">New Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="new_password" name="new_password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_password" class="col-md-2 control-label">Confirm Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection