<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function SignUp(Request $request)
    {
        $name = $request['rej-name'];
        $email = $request['rej-email'];
        $psw = bcrypt($request['rej-psw1']);

        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password =$psw;

        $user->save();
        return redirect()->route('welcome');
    }
    public function SignIn(Request $request)
    {


        if (Auth::attempt('email'==$request['log-email'], 'password'==$request['log-psw'])){
            return redirect()->route('welcome');
        }
        return redirect()->back();

    }
}
