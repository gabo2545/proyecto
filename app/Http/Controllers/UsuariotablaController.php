<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use App\Models\usuarios;
use App\Models\roles;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class UsuariotablaController extends Controller
{
    public function index()
    {

        $empleados = empleados::join('categoria_cargos', 'empleados.FK_categoria_cargos', '=', 'categoria_cargos.id')
            ->join('categoria_areas', 'empleados.FK_categoria_areas', '=', 'categoria_areas.id')
            ->join('usuarios', 'empleados.FK_usuarios', '=', 'usuarios.id')
            ->select(
                'empleados.nombre_empleado',
                'empleados.apellido_paterno',
                'empleados.apellido_materno',
                'empleados.telefono',
                'categoria_cargos.nombrecargo',
                'categoria_areas.nombrearea',
                'usuarios.usuario',
                'usuarios.contraseña',
                'usuarios.correo_electronico'
            )
            ->get();

        return view('./admin/perfil', compact('empleados'));
    }
}
