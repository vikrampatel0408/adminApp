<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = "tasks";
    protected $id = "task_id";
    protected $task_name = "task_name";
    protected $task_detail = "task_detail";
    protected $status = "status";
    protected $project_id = "project_id";
    protected $user_id = "user_id";
    protected $username = "username";
    protected $project_name = "project_name";
    use HasFactory;
}
