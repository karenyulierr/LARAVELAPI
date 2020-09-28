<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    public $table = "estadisticas";

    protected $fillable = [
        'idUsuarios',
        'exceso_de_velocidad',
        'habla_por_celular',
        'tanquea_con_pasajeros',
        'omite_senales',
        'conduce_brusco',
        'trato_amable_cordial',
        'conduce_con_prudencia',
        'respeta_las_senales',
        'vehiculo_limpio',
        'viaje_agradable_limpio_seguro',
        'otra'
    ];

}