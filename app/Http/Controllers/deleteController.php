<?php

namespace App\Http\Controllers;
use App\Models\task;
use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function deleteTask($id){
        task::where(['task_id'=>$id])->delete();
        return redirect('/tasks');
    }
}
