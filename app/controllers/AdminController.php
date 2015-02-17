<?php

class AdminController extends BaseController
{

    public function listUser()
    {
        $data['users'] = User::where('type', '!=', 'admin')->get();
        return View::make('admin.user.list')->with($data);
    }

    public function activateUser($id){
        $user = User::find($id);
        $user->active = true;
        $user->save();

        return Redirect::action('admin.user.list');
    }

    public function deactivateUser($id){
        $user = User::find($id);
        $user->active = false;
        $user->save();

        return Redirect::action('admin.user.list');
    }

    public function deleteUser($id)
    {
        User::destroy($id);

        return Redirect::action('admin.user.list');
    }

}
