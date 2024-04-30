<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retangulo;

class RetanguloController extends Controller
{
    public function calculaArea(Request $request){
        $base = (int)$request->query('base');
        $altura = (int)$request->query('altura');

        $retangulo = new Retangulo($base,$altura);
        return view('app.retangulo')
        ->with('base',$base)
        ->with('altura',$altura)
        ->with('areaRetangulo', $retangulo->calculaArea($base,$altura));
    }
}
