<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    public $table = "rutas";

    protected $fillable = [
        'codigo',
        'descripcion',
        'idBarrioInicia',
        'idBarrioTermina',
        'recorridoRuta',
        'estado',
        'fechaCrea',
        'fechaModifica',
        'idUsuarioCrea',
        'idUsuarioModifica',
     
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
