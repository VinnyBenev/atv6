<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quadrado extends Model
{
    use HasFactory;

    private int $lado;

    public function calculaArea(): float{
        return $this->lado*$this->lado;
    }

    public function __construct($lado){
        $this->lado = $lado;
    }
}
