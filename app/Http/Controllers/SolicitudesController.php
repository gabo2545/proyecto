<?php

namespace App\Http\Controllers;

use App\Models\solicitudes;
use Illuminate\Routing\Controller;

class SolicitudesController extends Controller

{
    public function solicitudes()
    {

        $solicitud = solicitudes::all();
        if ($solicitud) {
            return response()->json([
                'exito' => true,
                'folio' => $solicitud->folio,
                'fecha' => $solicitud->fechahora,
                'problema' => $solicitud->descripcion_problema,
                'equipo' => $solicitud->FK_equipo,
                'area' => $solicitud->FK_categoria_area,
                'estado' => $solicitud->estado,
                'empleado' => $solicitud->FK_empleado
            ]);
        } else {
            return response()->json(['exito' => false]);
        }
    }

}





