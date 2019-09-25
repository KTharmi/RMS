<?php

namespace App;

use App\Student;
use App\Subject;
use Illuminate\Database\Eloquent\Model;

class Ece extends Model
{
    public function student()
    {
     return $this->belongsTo(Student::class);
    }

   public function subjects()
   {
       return $this->belongsTo(Subject::class);
   }
   
}
