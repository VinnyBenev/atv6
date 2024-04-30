<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    public function calculo(){
        return view('app.calculos');
    }
    public function redirect(){
        return redirect()->route('site.index');
    }
}
