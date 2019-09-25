<?php

namespace App\Http\Controllers\Hod;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('hod/home');
    }
}
