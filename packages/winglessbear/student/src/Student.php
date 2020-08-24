<?php

namespace Winglessbear\Student;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','phoneNumber','email'];
}
