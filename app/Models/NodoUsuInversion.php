<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NodoUsuInversion extends Model
{
    use HasFactory;

    protected $table = 'nodo_usu_inversion';


    protected $fillable = ['usu_inv_id', 'nodo_padre', 'tipo_nodo','posicion','nivel_nodo'];
    public $timestamps = false; // Desactivar timestamps
}
