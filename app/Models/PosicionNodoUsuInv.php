<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosicionNodoUsuInv extends Model
{
    use HasFactory;
    protected $table = 'posicion_nodo_usuinv';

    protected $fillable = ['fecha','posicion', 'nivel_nodo', 'nodo_padre', 'usr_referido_id', 'estado_posicion'];
    public $timestamps = false;
}