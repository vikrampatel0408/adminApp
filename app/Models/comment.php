<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
   protected $table = "comments";
    protected $comment_content = "comment_content";
    protected $username = "username";
    protected $task_name = "task_name";
    protected $user_id = "user_id";
    protected $task_id = "task_id";
        use HasFactory;
}
