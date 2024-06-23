<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAddressApiModel extends Model
{
    use HasFactory;
    public $table = "student_address";
    public $timestamps = false;
}
