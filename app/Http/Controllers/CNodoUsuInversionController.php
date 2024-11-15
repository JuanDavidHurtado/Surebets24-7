<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NodoUsuInversion;
use App\Models\Usuario;
use App\Services\NodoService;
use App\Services\InversionService;
use Illuminate\Support\Facades\DB;



use Illuminate\Support\Facades\Log;


class CNodoUsuInversionController extends Controller
{
    protected $nodoService;
    protected $inversionService;

    public function __construct(NodoService $nodoService, InversionService $inversionService)
    {
        $this->nodoService = $nodoService;
        $this->inversionService = $inversionService;
    }

    public function buscarPosicionRef($idPatrocinador)
    {
        // Llamar al servicio para determinar las posiciones disponibles
        $posicionesDisponibles = $this->nodoService->determinarPosicionesDisponibles($idPatrocinador);

        // Devolver las posiciones disponibles como respuesta JSON
        return response()->json(['posiciones_disponibles' => $posicionesDisponibles]);
    }

    public function index()
    {

        $nodoUsuInversion = $this->nodoService->index();
        return response()->json($nodoUsuInversion);
    }

    public function obtener_usu_inv_x_usrId($id)
    {
        $dataUsuInv = $this->inversionService->get_inv_x_usuarioId($id);
        return response()->json($dataUsuInv);
    }


    public function calcularComision($id_usu_inv)
    {
        // $comision_array =  $this->inversionService->determinar_comision($id_usu_inv);
        $valor_comision = $this->inversionService->acutalizar_comisiones_x_binario();
        Log::info("verificar comision", ["comision" => $valor_comision]);


        return response()->json($valor_comision);


    }


}
