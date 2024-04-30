<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallBackController extends Controller
{
    public function fallBack(){
        return view('fallback');
    }
}
