<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Usuario;
use App\Models\NodoUsuInversion;
use App\Services\NodoService;

class InversionService
{

    protected $nodoService;

    public function __construct(NodoService $nodoService)
    {
        $this->nodoService = $nodoService;
    }


    public function get_inv_x_usuarioId($id)
    {

        try {
            $data = DB::table('usuario_inversion')->where('usu_inv_estado', 'EN PROCESO')->where('usuario_idUsuario', $id)->get();

            if ($data->count() > 0) {

                return $data;
            } else {
                return 'NothasData';
            }

        } catch (\Exception $e) {

            return response()->json(['error' => 'Ocurrió un error al obtener los datos'], 500);
        }


    }


    public function determinar_comision($nodo_padre)
    {

        try {
            $nodosRelacionados = [];
            $nivel_nodo_padre = 0;
            // Log::info("id patrocinador determinar comision", ["id patrocinador"=>$id_patrocinador]);
            $data = DB::table('usuario_inversion')->where('usu_inv_estado', 'EN PROCESO')->where('id_usu_inv', $nodo_padre)->first();
            $get_nodo_padre = NodoUsuInversion::where('nodo_padre', $nodo_padre)->first();

            if (isset($get_nodo_padre)) {
                $nivel_nodo_padre = $get_nodo_padre->nivel_nodo;
            }
            $id_usu_inv = $nodo_padre;
            Log::info("id usu inversion determinar comision", ["id usu inv" => $id_usu_inv]);


            // Función recursiva para encontrar nodos directos e indirectos
            $buscarNodos = function ($padreId) use (&$nodosRelacionados, &$buscarNodos) {
                $hijos = NodoUsuInversion::where('nodo_padre', $padreId)->get()->toArray();
                $nodosRelacionados = array_merge($nodosRelacionados, $hijos);

                // Llamar recursivamente a la función para cada hijo encontrado
                foreach ($hijos as $hijo) {
                    $buscarNodos($hijo['usu_inv_id']);
                }
            };

            // error corregir
            if ($data) {

                $buscarNodos($id_usu_inv);
            }
            Log::info("Nodos relacionados:", $nodosRelacionados);
            $nodosExtremos = $this->determinar_nodos_extremos($nodosRelacionados, $nivel_nodo_padre);
            $is_binary = $this->is_binary_ext($nodosExtremos);

            if ($is_binary !== null && count($is_binary) > 0) {
                $comision_array = $this->calcular_comision($is_binary, $nodo_padre);

                return $comision_array;
            }
            return null;
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            Log::error("Error al obtener los datos: $errorMessage");

            return response()->json(['error' => 'Ocurrio un error al obtener los datos'], 500);
        }
    }

    public function determinar_nodos_extremos($nodosRelacionados, $nivel_nodo_padre)
    {
        try {

            $levels = [];
            $parentMap = [];

            $deltaNivel = $nivel_nodo_padre - 1;
            // Organizar nodos por niveles y mapear nodos padres
            foreach ($nodosRelacionados as $node) {
                $level = $node["nivel_nodo"];
                // Restar 1 al nivel si $nivel_nodo_padre no es null
                if ($nivel_nodo_padre > 1) {
                    $node["nivel_nodo"] -= 1;
                    // $level -= 1;
                    $level = $level - $deltaNivel;
                }
                if (!isset($levels[$level])) {
                    $levels[$level] = [];
                }
                if (!isset($levels[$level][$node["posicion"]])) {
                    $levels[$level][$node["posicion"]] = [];
                }
                $levels[$level][$node["posicion"]][] = $node;
                $parentMap[$node["usu_inv_id"]] = $node["nodo_padre"];
            }
            Log::info("niveles en funcion determinar nodos extremos", ["levels", $levels]);
            // Inicializar nodos externos
            $externalNodes = [];

            // Procesar el nivel 1
            $externalNodes[1] = [
                "left" => $levels[1]["izquierda"][0]["usu_inv_id"] ?? null,
                "right" => $levels[1]["derecha"][0]["usu_inv_id"] ?? null,
            ];

            // Procesar niveles siguientes
            for ($level = 2; isset($levels[$level]); $level++) {
                $previousLeft = $externalNodes[$level - 1]["left"];
                $previousRight = $externalNodes[$level - 1]["right"];

                $leftNode = null;
                $rightNode = null;

                foreach ($levels[$level]["izquierda"] ?? [] as $node) {

                    if ($node["nodo_padre"] == $previousLeft) {
                        $leftNode = $node;
                        break;
                    }
                }

                foreach ($levels[$level]["derecha"] ?? [] as $node) {

                    if ($node["nodo_padre"] == $previousRight) {
                        $rightNode = $node;
                        break;
                    }
                }

                // Asegurarse de que los nodos en los extremos son hijos de los nodos en los extremos del nivel anterior
                if ($previousLeft && $leftNode) {
                    $externalNodes[$level]["left"] = $leftNode["usu_inv_id"];
                } else {
                    $externalNodes[$level]["left"] = null;
                }

                if ($previousRight && $rightNode) {
                    $externalNodes[$level]["right"] = $rightNode["usu_inv_id"];
                } else {
                    $externalNodes[$level]["right"] = null;
                }
            }

            return $externalNodes;
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al obtener los datos'], 500);
        }
    }

    /*public function determinar_nodos_extremos($nodosRelacionados, $nivel_nodo_padre)
    {
        try {

            $levels = [];
            $parentMap = [];


            // Organizar nodos por niveles y mapear nodos padres
            foreach ($nodosRelacionados as $node) {
                $level = $node["nivel_nodo"];

                // Restar 1 al nivel si $nivel_nodo_padre no es null
                if ($nivel_nodo_padre > 1) {
                    $node["nivel_nodo"] -= 1;
                    $level -= 1;
                }
                if (!isset($levels[$level])) {
                    $levels[$level] = [];
                }
                if (!isset($levels[$level][$node["posicion"]])) {
                    $levels[$level][$node["posicion"]] = [];
                }
                $levels[$level][$node["posicion"]][] = $node;
                $parentMap[$node["usu_inv_id"]] = $node["nodo_padre"];
            }
            Log::info("niveles en funcion determinar nodos extremos", ["levels", $levels]);
            // Inicializar nodos externos
            $externalNodes = [];

            // Procesar el nivel 1
            $externalNodes[1] = [
                "left" => $levels[1]["izquierda"][0]["usu_inv_id"] ?? null,
                "right" => $levels[1]["derecha"][0]["usu_inv_id"] ?? null,
            ];

            // Procesar niveles siguientes
            for ($level = 2; isset($levels[$level]); $level++) {
                $previousLeft = $externalNodes[$level - 1]["left"];
                $previousRight = $externalNodes[$level - 1]["right"];

                $leftNode = null;
                $rightNode = null;

                foreach ($levels[$level]["izquierda"] ?? [] as $node) {
                    if ($node["nodo_padre"] == $previousLeft) {
                        $leftNode = $node;
                        break;
                    }
                }

                foreach ($levels[$level]["derecha"] ?? [] as $node) {
                    if ($node["nodo_padre"] == $previousRight) {
                        $rightNode = $node;
                        break;
                    }
                }

                // Asegurarse de que los nodos en los extremos son hijos de los nodos en los extremos del nivel anterior
                if ($previousLeft && $leftNode) {
                    $externalNodes[$level]["left"] = $leftNode["usu_inv_id"];
                } else {
                    $externalNodes[$level]["left"] = null;
                }

                if ($previousRight && $rightNode) {
                    $externalNodes[$level]["right"] = $rightNode["usu_inv_id"];
                } else {
                    $externalNodes[$level]["right"] = null;
                }
            }

            Log::info("nodos extremos", ["nodos ext", $externalNodes]);

            return $externalNodes;
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al obtener los datos'], 500);
        }
    }*/

    function is_binary_ext($array)
    {
        Log::info("is binary ext", ["array" => $array]);
        $binary = [];
        foreach ($array as $key => $subArray) {
            $cont = 0;
            Log::info("Key: $key");
            foreach ($subArray as $position => $value) {
                Log::info("  $position: $value");
                if (isset($value)) {
                    // Add the entire subArray to the $binary array
                    $cont++;
                }
            }

            if ($cont < 2) {
                Log::info("Este nivel no tiene binario");


            } else {
                Log::info("Nivel es binario externo");
                $binary[] = $subArray;
            }
        }

        return $binary;
    }


    function calcular_comision($nodos_binarios, $nodo_padre)
    {

        Log::info("message", ["nodos binarios" => $nodos_binarios]);
        // Verificar si el array tiene datos
        if (empty($nodos_binarios) || !is_array($nodos_binarios)) {
            return "El array de nodos está vacío o no es un array válido.";
        }

        $totalIzquierda = 0;
        $totalDerecha = 0;

        // Procesar cada nodo
        foreach ($nodos_binarios as $nodo) {

            Log::info("nodo", ["nodo" => $nodo]);
            // Verificar que el nodo tenga las claves 'left' y 'right'
            if (isset($nodo['left'])) {
                $dataUsuInv = DB::table('usuario_inversion as ui')
                    ->select('ui.*', 'i.invPunto', 'i.invValor')
                    ->join('inversion as i', 'ui.inversion_idInversion', '=', 'i.idInversion')
                    ->where('ui.id_usu_inv', $nodo['left'])
                    ->first();

                Log::info("data usu inv izquierda", ["usu inv" => $dataUsuInv]);

                // Si la consulta arrojó resultado, tomar el valor de invPunto
                if ($dataUsuInv) {

                    Log::info("totalIzquierda izquierda", ["contador" => $totalIzquierda]);

                    Log::info("contador izquierda", ["contador" => $dataUsuInv->invPunto]);

                    $totalIzquierda += $dataUsuInv->invPunto;
                    $comision = intval($dataUsuInv->invValor) * 0.1;
                    $detalleNodosIzq[] = [
                        'nodo' => $nodo['left'],
                        'nodo_padre' => $nodo_padre,
                        'posicion' => 'izquierda',
                        'puntaje' => $dataUsuInv->invPunto,
                        'valorInv' => $dataUsuInv->invValor,
                        'comision' => $comision,
                        'total_acumulado' => $totalIzquierda,
                    ];

                    Log::info("total punto izquierda", ["total izquierda" => $totalIzquierda]);

                }

            }

            if (isset($nodo['right'])) {
                $dataUsuInv = DB::table('usuario_inversion as ui')
                    ->select('ui.*', 'i.invPunto', 'i.invValor')
                    ->join('inversion as i', 'ui.inversion_idInversion', '=', 'i.idInversion')
                    ->where('ui.id_usu_inv', $nodo['right'])
                    ->first();
                Log::info("data usu inv derecha", ["usu inv" => $dataUsuInv]);

                // Si la consulta arrojó resultado, tomar el valor de invPunto
                if ($dataUsuInv) {
                    Log::info("totalderecha derecha", ["contador" => $totalDerecha]);

                    Log::info("contador derecha", ["contador" => $dataUsuInv->invPunto]);

                    $totalDerecha += $dataUsuInv->invPunto;
                    $comision = intval($dataUsuInv->invValor) * 0.1;

                    $detalleNodosDer[] = [
                        'nodo' => $nodo['right'],
                        'nodo_padre' => $nodo_padre,
                        'posicion' => 'derecha',
                        'puntaje' => $dataUsuInv->invPunto,
                        'valorInv' => $dataUsuInv->invValor,
                        'comision' => $comision,
                        'total_acumulado' => $totalDerecha,
                    ];
                    Log::info("total punto derecha", ["total derecha" => $totalDerecha]);

                }

            }
        }

        // Determinar el menor resultado entre derecha e izquierda
        if ($totalIzquierda < $totalDerecha) {
            Log::info("datos de comision binario por izq", ["binario" => $detalleNodosIzq]);
            // $valorComisionIzq=$this->valorComision($detalleNodosIzq);
            return $detalleNodosIzq;
        } elseif ($totalDerecha < $totalIzquierda) {
            Log::info("datos de comision binario por derecha", ["binario" => $detalleNodosDer]);
            // $valorComisionDer=$this->valorComision($detalleNodosDer);


            return $detalleNodosDer;
        } else {
            //return "Ambas ramas tienen la misma cantidad de puntos: $totalIzquierda";

            return $detalleNodosIzq;
        }

    }

    function acutalizar_comisiones_x_binario()
    {
        // Ahora puedes usar los métodos de NodoService
        $arbol_binario = $this->nodoService->index();
        // probar funcion 24-05-2024
        foreach ($arbol_binario as $nodo) {
            $nodo_padre = $nodo->usu_inv_id;
            Log::info("nodo padre actualizar comisiones x binario", ["nodo padre" => $nodo_padre]);
            $comision_array = $this->determinar_comision($nodo_padre);
            Log::info("comision array actualizar comisiones x binario", ['comision' => $comision_array]);
            if ($comision_array !== null) {
                $valorComision = $this->valorComision($comision_array, $nodo_padre);
                foreach ($valorComision as $comision) {
                    $get_comision = DB::table('comision')->where('usu_inv', $comision['usu_inv_id'])->where('comTipo', 3)->where('com_nivel_nodo', $comision['nivel'])->first();
                    if ($get_comision === null) {
                        $data = [
                            'comValor' => $comision['valor_comision'],
                            'usuario_idUsuario' => $comision['id_usuario'],
                            'usu_inv' => $comision['usu_inv_id'],
                            'usu_cur' => null,
                            'comTipo' => 3,
                            'comDescripcion' => 'Rentabilizacion obtenida al realizar un binario con un retorno del 10 % sobre la inversión inferior.',
                            'comEstado' => 'PENDIENTE',
                            'com_nivel_nodo' => $comision['nivel'],
                        ];

                        DB::table('comision')->insert($data);
                    }

                }
            }
        }
        // Hacer algo con la posición determinada
        return $arbol_binario;

    }

    function valorComision($arrayComisiones, $nodo_padre)
    {
        //corregir $nodo padre es usu_inv_id 
        $valorComision = [];

        //Log::info("valor comision-----", ['valor comision----' => $arrayComisiones]);


        foreach ($arrayComisiones as $comision) {
            // obtienen el nodo del referido
            $get_nodo = NodoUsuInversion::where('usu_inv_id', $comision['nodo'])->first();
            $nivel_nodo = $get_nodo->nivel_nodo;
            // Agregar la información al array de resultados
            $usuario_inversion = DB::table('usuario_inversion')->where('id_usu_inv', $nodo_padre)->first();
            $id_usuario = $usuario_inversion->usuario_idUsuario;

            $valorComision[] = [
                'nivel' => $nivel_nodo,
                'valor_comision' => $comision['comision'],
                'usu_inv_id' => $nodo_padre,
                'id_usuario' => $id_usuario
            ];

        }
        Log::info("valor comision", ['valor comision' => $valorComision]);

        return $valorComision;
    }
}

