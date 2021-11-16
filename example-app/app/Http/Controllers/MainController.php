<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Illuminate\Support\Facades\Redirect;


class MainController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    public function doLogin(){
        $userdata = array(
            'email' => Request::get('email') ,
            'password' => Request::get('pass')
          );

        //   if (Auth::attempt($userdata)) {

        //     // validation successful!
        //     // redirect them to the secure section or whatever
        //     // return Redirect::to('secure');
        //     // for now we'll just echo success (even though echoing in a controller is bad)
        //     echo 'SUCCESS!';

        // } else {

        //     // validation not successful, send back to form
        //     //return Redirect::to('login');

       // }

    }

    public function doLogout(){

    }
}
