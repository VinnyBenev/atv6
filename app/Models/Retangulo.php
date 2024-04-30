<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retangulo extends Model
{
    use HasFactory;
    
    private int $base;
    private int $altura;

    public function calculaArea(): float{
        return $this->base*$this->altura;
    }
    public function __construct($base,$altura){
        $this->base = $base;
        $this->altura = $altura;
    }
}
