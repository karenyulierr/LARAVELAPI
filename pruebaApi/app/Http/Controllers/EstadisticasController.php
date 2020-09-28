<?php
namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use  JWTAuth;

use Tymon\JWTAuth\Exceptions\JWTException;
class  EstadisticasController extends Controller {
    public function registerEstadisticas(Request  $request) {
        $estadisticas = new  Estadisticas();
        $estadisticas->idUsuarios = Auth::user()->id;
        $estadisticas->exceso_de_velocidad = $request->exceso_de_velocidad;
        $estadisticas->habla_por_celular = $request->habla_por_celular;
        $estadisticas->tanquea_con_pasajeros = $request->tanquea_con_pasajeros;
        $estadisticas->omite_senales = $request->omite_senales;
        $estadisticas->conduce_brusco = $request->conduce_brusco;
        $estadisticas->trato_amable_cordial = $request->trato_amable_cordial;
        $estadisticas->conduce_con_prudencia = $request->conduce_con_prudencia;
        $estadisticas->respeta_las_senales = $request->respeta_las_senales;
        $estadisticas->vehiculo_limpio = $request->vehiculo_limpio;
        $estadisticas->viaje_agradable_limpio_seguro = $request->viaje_agradable_limpio_seguro;
        $estadisticas->otra = $request->otra;
        $user->save();

        return  response()->json([
            'status' => 'ok',
            'data' => $user
        ], 200);
    }
}