<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circulo extends Model
{
    use HasFactory;

    private int $raio;

    public function calculaArea():float{
        return pi() * pow($this->raio, 2);
    }
    public function __construct($raio){
        $this->raio = $raio;
    }
}
