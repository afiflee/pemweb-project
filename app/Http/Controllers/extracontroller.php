<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\refkuesioner;
use Illuminate\Http\Request;

class extracontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function jadwalrk(){

    }
}
