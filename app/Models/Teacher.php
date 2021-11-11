<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function course (){        
        return $this->belongsto(Course::class);
    }
    use HasFactory;
}
