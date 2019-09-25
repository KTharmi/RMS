<?php

namespace App\Http\Controllers\hod;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalanderController extends Controller
{
    public function index()
    {
        return view ('hod.calander');
    }
}
