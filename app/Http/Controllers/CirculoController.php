<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circulo;

class CirculoController extends Controller
{
    public function calculaArea(Request $request){
        $raio = (int)$request->query('raio');

        $circulo = new Circulo($raio);
        return view('app.circulo')
        ->with('raio',$raio)
        ->with('areaCirculo', $circulo->calculaArea($raio));
    }
}
