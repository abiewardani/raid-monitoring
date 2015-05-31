<?php

class UsersController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */



    public function login()
    {
        $username = Input::get("username");
        $password = md5(Input::get("password"));
        $login = User::where("username","=",$username)->where("password","=",$password)->get();
        if(count($login) > 0){
            Session::put('id', $login['0']->user_id);
            Session::put('username', $login['0']->username);
            return Redirect::to('admin/food/');
        }else{
            return Redirect::to('/')->with('login_errors', true);
        }
    }

    public function logout()
    {
        Session::flush();
        return Redirect::to('/');
    }

}
