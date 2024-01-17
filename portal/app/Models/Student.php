<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{ 
    // private static $student;
    // protected $table = "students";
    // protected $primarykey = "id";
    // protected $fillable = ['name', 'address', 'mobile', 'std_id','teacher_id','course_id'];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
}


