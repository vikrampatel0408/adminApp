<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $project_name = "project_name";
    protected $project_date	 = "project_date";

    
}
