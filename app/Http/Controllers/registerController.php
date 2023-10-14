<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class registerController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $data = $request->all();
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
         
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect('/login');
    }
}
