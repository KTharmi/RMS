<?php

namespace App;

use App\Lecturer;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function lecturers()
    {
        return $this->hasMany(Lecturer::class);
    }
}
