<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function course (){        
        return $this->belongsto(Course::class);
    }
    
    use HasFactory;
}