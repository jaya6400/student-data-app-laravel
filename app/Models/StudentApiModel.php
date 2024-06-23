<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentApiModel extends Model
{
    use HasFactory;
    public $table = "student_data";
    public $timestamps = false;
}
