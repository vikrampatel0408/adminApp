<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\task;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = task::all();
        $data = compact('tasks');
        return view('allTask')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $projects = project::all();
        $data = compact('projects', 'users');
        return view('addTask')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $body = $request->all();
        $projectname = $body['projectName'];
        $username = $body['userName'];
        $taskname = $body['taskName'];
        $taskcontent = $body['taskContent'];
        $status = $body['status'];
        $user_id = User::where(['username' => $username])->value('user_id');
        $project_id = project::where(['project_name' => $projectname])->value('project_id');

        $task = new task();
        $task->task_name = $taskname;
        $task->task_detail = $taskcontent;
        $task->project_id = $project_id;
        $task->user_id = $user_id;
        $task->status = $status;
        $task->username = $username;
        $task->project_name = $projectname;
        $task->save();
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $projects = project::all();
        $task = task::where(['task_id' => $id])->get();
        $isAdmin = session('isAdmin');
        $data = compact('task', 'users', 'projects', 'id', 'isAdmin');
        return view('updateTask')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $task_id)
    {
        $isAdmin = session('isAdmin');
        $body = $request->all();
        if ($isAdmin == 1) {
            $projectname = $body['projectName'];
            $username = $body['userName'];
            $taskname = $body['taskName'];
            $taskcontent = $body['taskContent'];
            $user_id = User::where(['username' => $username])->value('user_id');
            $project_id = project::where(['project_name' => $projectname])->value('project_id');
        }
        $status = $body['status'];


        if ($isAdmin == 1) {
            task::where(['task_id' => $task_id])->update([
                'task_name' => $taskname,
                'task_detail' => $taskcontent,
                'project_name' => $projectname,
                'username' => $username,
                'status' => $status,
                'project_id' => $project_id,
                'user_id' => $user_id
            ]);
            return redirect('/tasks');
        } else {
            task::where(['task_id' => $task_id])->update([
                'status' => $status
            ]);
            return redirect('/usertasks');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        task::where(['task_id', $id])->destroy();
        return redirect('/tasks');
    }
}
