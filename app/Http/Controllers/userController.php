<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\user;
use App\Models\project;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index (){
        $id = session('user_id');
        $tasks = task::where(['user_id'=> $id])->get();
        $isAdmin = session('isAdmin');
        $data = compact('tasks','isAdmin');
        return view('userTasks')->with($data);
    }
    public function update($id){
        $users = User::all();
        $projects = project::all();
        $task = task::where(['task_id'=> $id])->get();
        $data = compact('task','users','projects','id');
        return view('updateTask')->with($data);

    }
}
