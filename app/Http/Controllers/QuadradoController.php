<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quadrado;

class QuadradoController extends Controller
{
    public function calculaArea(Request $request){
        $lado = (int)$request->query('lado');

        
        $quadrado = new Quadrado($lado);
        return view('app.quadrado')
        ->with('lado',$lado)
        ->with('areaQuadrado', $quadrado->calculaArea($lado));
    }
}
