<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin( Request $request){
        $body = $request->all();
        $email = $body['email'];
        $password = $body['password'];
        $user = User::where(['email'=> $email ,'password'=>$password])->get()->toArray();
        
        $data = compact('user');
        if($user){
            session(['user_name'=>$user[0]["username"]]);
            session(['user_id'=>$user[0]["user_id"]]);
            
            if($user[0]['isAdmin']== 1){
                session(['isAdmin'=>1]);
            return redirect('/tasks');
            }
            else{
                session(['isAdmin'=>0]);
                return redirect('/usertasks');
            }
        }
        return redirect('/login');

    }
}
