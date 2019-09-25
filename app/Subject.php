<?php

namespace App;

use App\Ica;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function icas()
    {
        return $this->hasMany(Ica::class);
    }
}
