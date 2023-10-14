<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{

    use HasFactory;
    protected $table = "users";
    protected $user_id = "user_id";
    protected $username = "username";
    protected $email = "email";
    protected $password = "passsword";   
}
