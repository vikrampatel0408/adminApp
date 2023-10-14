<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\task;
use App\Models\user;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function storeComments (Request $request,$id){
        $body = $request->all();
        $user_id = session('user_id');
        $username = user::where(['user_id'=>$user_id])->value('username');
        $task_name = task::where(['task_id'=>$id])->value('task_name');
        $comment = new comment();
        $comment_content = $body['comment_content'];
        $comment->task_id = $id;
        $comment->task_name = $task_name;
        $comment->username = $username;
        $comment->user_id = $user_id;
        $comment->comment_content = $comment_content;
        $comment->save();
        return redirect ('/usertasks');
    }
    public function  addComments(){
        return view('addComment');
    }
    public function viewComments ($id){
        $comments = comment::where(['task_id'=>$id])->get();
        $data = compact('comments');
        return view('viewComment')->with($data);
    }
}
