<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers_course extends Model
{
    use HasFactory;
    protected $table='teachercourses';


    public function courses (){        
        return $this->belongsto(Course::class,'course_id');
    }

    public function teachers (){        
        return $this->belongsto(Teacher::class,'teacher_id');
    }
}