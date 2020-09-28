<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
  
    public $table = "barrio";

    protected $fillable = [
        'idMunicipio',
        'descripcion',
        'latitud',
        'longitud',
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
