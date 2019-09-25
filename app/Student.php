<?php

namespace App;

use App\Ica;
use App\Ece;
use App\Final_result;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function icas()
   {
         return $this->hasMany(Ica::class);
    }
    public function eces()
   {
         return $this->hasMany(Ece::class);
    }
    public function final_results()
   {
    return $this->hasMany(Final_result::class);
    }
}
