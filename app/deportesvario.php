<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deportesvario extends Model
{
    // asegura el nombre de la tabla en nuestra base de datos
    protected $table = 'deportesvarios';  
    public $timestamps = false; //crea campos en la base de datos... fechas etc
}
