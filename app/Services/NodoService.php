<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\NodoUsuInversion;
use App\Models\Usuario;
use App\Models\PosicionNodoUsuInv;

class NodoService
{
    public function determinarPosicionNodo($patrocinador)
    {
        if ($patrocinador) {
            $tieneHijoIzquierdo = NodoUsuInversion::where('nodo_Padre', $patrocinador)->where('posicion', 'izquierda')->exists();
            $tieneHijoDerecho = NodoUsuInversion::where('nodo_Padre', $patrocinador)->where('posicion', 'derecha')->exists();

            if (!$tieneHijoIzquierdo) {
                return 'izquierda';
            } elseif (!$tieneHijoDerecho) {
                return 'derecha';
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    public function insertarNodo($usuarioId, $nodoPadre, $tipoNodo, $posicion, $nivel)
    {
        try {


            $numeroDeHijos = NodoUsuInversion::where('nodo_padre', $nodoPadre)->count();

            if ($numeroDeHijos < 2) {
                Log::info("datos insertar nodo", [
                    'usuarioId' => $usuarioId,
                    'nodoPadre' => $nodoPadre,
                    'posicion' => $posicion,
                    'tipoNodo' => $tipoNodo,
                    'nivel' => $nivel
                ]);
                // Si tiene menos de dos registros, proceder con la inserción
                NodoUsuInversion::create([
                    //'fecha' => date('Y-m-d-H-i-s'),
                    'usu_inv_id' => $usuarioId,
                    'nodo_padre' => $nodoPadre,
                    'tipo_nodo' => $tipoNodo,
                    'posicion' => $posicion,
                    'nivel_nodo' => $nivel
                ]);

                // Array para almacenar los antecesores
                $antecesores = [];

                // Variable para seguir rastreando los nodos padre
                $currentUsuInvId = $usuarioId;

                // Bucle para encontrar todos los antecesores
                while ($currentUsuInvId !== null) {
                    // Consultar el nodo padre actual
                    $nodo = NodoUsuInversion::where('usu_inv_id', $currentUsuInvId)->first();
                    Log::info("funcion insertar nodo", ["nodo" => $nodo]);
                    if ($nodo) {
                        // Guardar el nodo padre actual en el array de antecesores
                        $antecesores[] = $nodo->nodo_padre;
                        Log::info("funcion insertar nodo", ["nodo" => $nodo->usu_inv_id]);

                        // Actualizar el nodo padre para la siguiente iteración
                        $currentUsuInvId = $nodo->nodo_padre;
                        Log::info("currentnodopadre", ["currentnodopadre" => $currentUsuInvId]);
                    } else {
                        // Si no hay más nodos padre, salir del bucle
                        $currentUsuInvId = null;
                    }
                }

                // Log de los antecesores encontrados
                Log::info("Antecesores encontrados", [
                    'usuarioId' => $usuarioId,
                    'antecesores' => $antecesores
                ]);
                if (count($antecesores) > 0) {
                    foreach ($antecesores as $nodoPadre) {
                        if ($nodoPadre !== null) { // Verificar que el nodoPadre no sea null
                            $usrReferido = DB::table('usuario_inversion')
                                ->join('inversion', 'usuario_inversion.inversion_idInversion', '=', 'inversion.idInversion')
                                ->join('usuario', 'usuario_inversion.usuario_idUsuario', '=', 'usuario.idUsuario')
                                ->where('usuario_inversion.id_usu_inv', $usuarioId)
                                ->select('inversion.invPunto', 'usuario.usuLogin', 'inversion.invValor') // Selecciona todos los campos de ambas tablas
                                ->first();
                            $puntajeUsrReferido = $usrReferido->invPunto;
                            $usuLoginReferido = $usrReferido->usuLogin;
                            $valorInv = $usrReferido->invValor;

                            $usuarioInversion = DB::table('usuario_inversion')->where('id_usu_inv', $nodoPadre)->first();

                            if ($usuarioInversion) {
                                $usuarioIdUsuario = $usuarioInversion->usuario_idUsuario;

                                $verificarRegistroPuntoArbol = DB::table('puntos_nodo_arbol')->where('usu_inv_id', $nodoPadre)->where('referido_inv_id', $usuarioId)->exists();

                                if (!$verificarRegistroPuntoArbol) {
                                    // Consulta SQL con parámetros vinculados
                                    $sql_lista = "SELECT * FROM usuario AS u 
                                            INNER JOIN rol AS r ON r.idRol = u.rol_idRol
                                            WHERE u.idUsuario = ?";

                                    // Ejecutar la consulta con los parámetros vinculados
                                    $data_patro = DB::select($sql_lista, [$usuarioIdUsuario]);
                                    $total = $data_patro[0]->usuPunto + $puntajeUsrReferido;

                                    $update_punto = "UPDATE usuario SET usuPunto = '$total' WHERE idUsuario = '$usuarioIdUsuario'";
                                    // Ejecuta la consulta de actualización
                                    DB::update($update_punto);

                                    $des_punto = $puntajeUsrReferido . ' Punto(s) obtenidos por medio del usuario ' . $usuLoginReferido . ', por ser parte de tu red binaria, monto invertido por el usuario ' . $valorInv . ' USD';


                                    DB::insert('INSERT INTO historial_punto (his_pun_fecha, his_pun_descripcion, his_pun_puntos, usuario_idUsuario) 
                                            VALUES (?,?,?,?)', [date('Y-m-d'), $des_punto, $puntajeUsrReferido, $usuarioIdUsuario]);
                                    Log::info("inserccion en tabla historial punto exitosa", ['usuarioIdUsuario' => $usuarioIdUsuario]);

                                    DB::insert('INSERT INTO puntos_nodo_arbol (usu_inv_id, referido_inv_id,puntos,fecha_creacion) values (?, ?, ?, ?)', [$nodoPadre, $usuarioId, $puntajeUsrReferido, date('Y-m-d')]);


                                    $updateUsuario = false;


                                    if ($total >= 70000 && $total < 200000 && $data_patro[0]->idRol == 2) {
                                        $updateUsuario = true;
                                        $id_rol = 3;
                                    } elseif ($total >= 200000 && $total < 500000 && $data_patro[0]->idRol == 3) {
                                        $updateUsuario = true;
                                        $id_rol = 4;
                                        //5
                                    } elseif ($total >= 500000 && $total < 1000000 && $data_patro[0]->idRol == 4) {
                                        $updateUsuario = true;
                                        $id_rol = 5;

                                        //7
                                    } elseif ($total >= 1000000 && $total < 2000000 && $data_patro[0]->idRol == 5) {
                                        $updateUsuario = true;
                                        $id_rol = 6;

                                        //10
                                    } elseif ($total >= 2000000 && $total < 5000000 && $data_patro[0]->idRol == 6) {
                                        $updateUsuario = true;
                                        $id_rol = 7;
                                    } elseif ($total >= 5000000 && $total < 10000000 && $data_patro[0]->idRol == 7) {
                                        $updateUsuario = true;
                                        $id_rol = 8;
                                    } elseif ($total >= 10000000 && $data_patro[0]->idRol == 8) {
                                        $updateUsuario = true;
                                        $id_rol = 9;
                                    } else {
                                        $updateUsuario = false;
                                    }

                                    // Actualiza la tabla usuario y el campo rol_idRol a 3
                                    if ($updateUsuario == true) {

                                        $fec_act = date('y-m-d');

                                        $update_query = "UPDATE usuario SET usuFechaRol = '$fec_act', rol_idRol = '$id_rol' WHERE idUsuario = '$usuarioIdUsuario'";
                                        // Ejecuta la consulta de actualización
                                        DB::update($update_query);
                                    }
                                }

                                // Aquí puedes realizar las acciones necesarias con el $usuarioIdUsuario
                                Log::info("Usuario encontrado", ['usuarioIdUsuario' => $usuarioIdUsuario]);
                            } else {
                                Log::info("Usuario no encontrado para nodoPadre", ['nodoPadre' => $nodoPadre]);
                            }
                        } else {
                            Log::info("NodoPadre es null", ['nodoPadre' => $nodoPadre]);
                        }
                    }
                } else {
                    Log::info("No hay antecesores para procesar", ['usuarioId' => $usuarioId]);
                }
            } else {
                Log::warning("El nodo padre ya tiene dos hijos", ['nodoPadre' => $nodoPadre]);
            }
        } catch (\Exception $e) {
            // Registrar el mensaje de error en los logs
            \Log::error('Error al insertar nodo: ' . $e->getMessage());
        }
    }
    /*public function insertarNodo($usuarioId, $nodoPadre, $tipoNodo, $posicion, $nivel)
    {
        try {


            $numeroDeHijos = NodoUsuInversion::where('nodo_padre', $nodoPadre)->count();

            if ($numeroDeHijos < 2) {
                    // Si tiene menos de dos registros, proceder con la inserción
                    NodoUsuInversion::create([
                        'usu_inv_id' => $usuarioId,
                        'nodo_padre' => $nodoPadre,
                        'tipo_nodo' => $tipoNodo,
                        'posicion' => $posicion,
                        'nivel_nodo' => $nivel
                    ]);

                     // Array para almacenar los antecesores
                    $antecesores = [];

                    // Variable para seguir rastreando los nodos padre
                    $currentUsuInvId = $usuarioId;

                    // Bucle para encontrar todos los antecesores
                    while ( $currentUsuInvId !== null) {
                        // Consultar el nodo padre actual
                        $nodo = NodoUsuInversion::where('usu_inv_id',  $currentUsuInvId)->first();
                        Log::info("funcion insertar nodo",["nodo"=>$nodo]);
                        if ($nodo) {
                            // Guardar el nodo padre actual en el array de antecesores
                            $antecesores[] = $nodo->nodo_padre;
                        Log::info("funcion insertar nodo",["nodo"=>$nodo->usu_inv_id]);
                            
                            // Actualizar el nodo padre para la siguiente iteración
                            $currentUsuInvId = $nodo->nodo_padre;
                        Log::info("currentnodopadre",["currentnodopadre"=> $currentUsuInvId]);
                            
                        } else {
                            // Si no hay más nodos padre, salir del bucle
                            $currentUsuInvId = null;
                        }
                    }

                    // Log de los antecesores encontrados
                    Log::info("Antecesores encontrados", [
                        'usuarioId' => $usuarioId,
                        'antecesores' => $antecesores
                    ]);
                    if (count($antecesores) > 0) {
                        foreach ($antecesores as $nodoPadre) {
                            if ($nodoPadre !== null) { // Verificar que el nodoPadre no sea null
                                $usrReferido = DB::table('usuario_inversion')
                                            ->join('inversion', 'usuario_inversion.inversion_idInversion', '=', 'inversion.idInversion')
                                            ->join('usuario', 'usuario_inversion.usuario_idUsuario', '=', 'usuario.idUsuario')
                                            ->where('usuario_inversion.id_usu_inv', $usuarioId)
                                            ->select('inversion.invPunto','usuario.usuLogin','inversion.invValor') // Selecciona todos los campos de ambas tablas
                                            ->first();
                                $puntajeUsrReferido = $usrReferido->invPunto;
                                $usuLoginReferido = $usrReferido->usuLogin;
                                $valorInv = $usrReferido->invValor;
                                
                                $usuarioInversion = DB::table('usuario_inversion')->where('id_usu_inv', $nodoPadre)->first();

                                if ($usuarioInversion) {
                                    $usuarioIdUsuario = $usuarioInversion->usuario_idUsuario;
                                    
                                    $verificarRegistroPuntoArbol = DB::table('puntos_nodo_arbol')->where('usu_inv_id',$nodoPadre)->where('referido_inv_id',$usuarioId)->exists();

                                    if(!$verificarRegistroPuntoArbol){
                                            // Consulta SQL con parámetros vinculados
                                            $sql_lista = "SELECT * FROM usuario AS u 
                                            INNER JOIN rol AS r ON r.idRol = u.rol_idRol
                                            WHERE u.idUsuario = ?";

                                            // Ejecutar la consulta con los parámetros vinculados
                                            $data_patro = DB::select($sql_lista, [$usuarioIdUsuario]);
                                            $total = $data_patro[0]->usuPunto + $puntajeUsrReferido;

                                            $update_punto = "UPDATE usuario SET usuPunto = '$total' WHERE idUsuario = '$usuarioIdUsuario'";
                                            // Ejecuta la consulta de actualización
                                            DB::update($update_punto);

                                            $des_punto = $puntajeUsrReferido . ' Punto(s) obtenidos por medio del usuario ' . $usuLoginReferido . ', por ser parte de tu red binaria, monto invertido por el usuario ' . $valorInv . ' USD';


                                            DB::insert('INSERT INTO historial_punto (his_pun_fecha, his_pun_descripcion, his_pun_puntos, usuario_idUsuario) 
                                            VALUES (?,?,?,?)', [date('Y-m-d'), $des_punto, $puntajeUsrReferido, $usuarioIdUsuario]);
                                            Log::info("inserccion en tabla historial punto exitosa", ['usuarioIdUsuario' => $usuarioIdUsuario]);

                                            DB::insert('INSERT INTO puntos_nodo_arbol (usu_inv_id, referido_inv_id,puntos,fecha_creacion) values (?, ?, ?, ?)', [$nodoPadre,$usuarioId,$puntajeUsrReferido,date('Y-m-d') ]);
                                    }
                                
                                    // Aquí puedes realizar las acciones necesarias con el $usuarioIdUsuario
                                    Log::info("Usuario encontrado", ['usuarioIdUsuario' => $usuarioIdUsuario]);

                                } else {
                                    Log::info("Usuario no encontrado para nodoPadre", ['nodoPadre' => $nodoPadre]);
                                }
                            } else {
                                Log::info("NodoPadre es null", ['nodoPadre' => $nodoPadre]);
                            }
                        }
                    } else {
                        Log::info("No hay antecesores para procesar", ['usuarioId' => $usuarioId]);
                    }
            } else {
                Log::warning("El nodo padre ya tiene dos hijos", ['nodoPadre' => $nodoPadre]);
            }

           
          
        } catch (\Exception $e) {
            // Registrar el mensaje de error en los logs
            \Log::error('Error al insertar nodo: ' . $e->getMessage());

        }
    }*/

    public function determinarPosicionesDisponibles($id)
    {

        Log::info("usr id ", ['idusr' => $id]);

        $posicionesDisponibles = [];

        try {
            // Buscar la inversión en proceso del usuario
            $usuInv = DB::table('usuario_inversion')
                ->where('usuario_idUsuario', $id)
                ->where('usu_inv_estado', 'EN PROCESO')
                ->first();

            // Verificar si se encontró una inversión en proceso
            if ($usuInv) {
                $id_usu_inv = $usuInv->id_usu_inv;
                Log::info("usr inv id ", ['idusr' => $id_usu_inv]);

                // Buscar el primer nodo en el nivel 0
                $usu_inv = NodoUsuInversion::where('usu_inv_id', $id_usu_inv)->first();
                Log::info("usu_inv", ['nuivel usr' => $usu_inv]);


                if ($usu_inv !== null) {
                    $nivel_usu_inv = $usu_inv->nivel_nodo;
                } else {
                    $nivel_usu_inv = 0;
                }


                // Llamada a una función auxiliar recursiva para determinar posiciones disponibles

                $this->determinarPosicionesDisponiblesRecursivo($id_usu_inv, $nivel_usu_inv + 1, $posicionesDisponibles);
            } else {
                // No se encontró una inversión en proceso para el usuario
                Log::info("No se encontró una inversión en proceso para el usuario con ID: $id");
            }
        } catch (\Exception $e) {
            // Manejar cualquier excepción ocurrida durante la búsqueda de la inversión
            Log::error("Error al determinar posiciones disponibles para el usuario con ID: $id. Error: " . $e->getMessage());
        }
        // Estados a verificar
        $estados = ['ASIGNADO', 'PENDIENTE', 'SELECCIONADO'];

        // Obtener todas las combinaciones que cumplan los criterios en una sola consulta
        $combinacionesExistentes = DB::table('posicion_nodo_usuinv')
            ->select('nodo_padre', 'posicion', 'nivel_nodo')
            ->whereIn('estado_posicion', $estados)
            ->get()
            ->toArray();
        // Convertir las combinaciones a un array fácil de buscar
        $combinacionesExistentes = array_map(function ($item) {
            return (array) $item;
        }, $combinacionesExistentes);

        // Crear un array asociativo para búsquedas rápidas
        $combinacionesExistentesArray = [];
        foreach ($combinacionesExistentes as $combinacion) {
            $key = $combinacion['nodo_padre'] . '-' . $combinacion['posicion'] . '-' . $combinacion['nivel_nodo'];
            $combinacionesExistentesArray[$key] = true;
        }

        // Filtrar las posiciones
        $posicionesFiltradas = array_filter($posicionesDisponibles, function ($posicion) use ($combinacionesExistentesArray) {
            $key = $posicion['userInvId'] . '-' . $posicion['posicion'] . '-' . $posicion['nivel'];
            return !isset($combinacionesExistentesArray[$key]);
        });
        $posicionesFiltradas = array_values($posicionesFiltradas);

        return $posicionesFiltradas;
    }

    /*public function determinarPosicionesDisponibles($id)
    {


        $posicionesDisponibles = [];

        try {
            // Buscar la inversión en proceso del usuario
            $usuInv = DB::table('usuario_inversion')
                ->where('usuario_idUsuario', $id)
                ->where('usu_inv_estado', 'EN PROCESO')
                ->first();

            // Verificar si se encontró una inversión en proceso
            if ($usuInv) {
                $id_usu_inv = $usuInv->id_usu_inv;

                // Buscar el primer nodo en el nivel 0
                $usr = NodoUsuInversion::where('nivel_nodo', 0)->first();
                $usu_inv = NodoUsuInversion::where('nodo_padre', $id_usu_inv)->first();


                if ($usu_inv !== null) {
                    $nivel_usu_inv = $usu_inv->nivel_nodo;

                } else {
                    $nivel_usu_inv = 0;
                }


                // Llamada a una función auxiliar recursiva para determinar posiciones disponibles
                if ($usr) {

                    $this->determinarPosicionesDisponiblesRecursivo($id_usu_inv, $nivel_usu_inv, $posicionesDisponibles);
                }


                 // Estados a verificar
                $estados = ['ASIGNADO', 'PENDIENTE', 'SELECCIONADO'];

                // Obtener todas las combinaciones que cumplan los criterios en una sola consulta
                $combinacionesExistentes = DB::table('posicion_nodo_usuinv')
                    ->select('nodo_padre', 'posicion', 'nivel_nodo')
                    ->whereIn('estado_posicion', $estados)
                    ->get()
                    ->toArray();
                // Convertir las combinaciones a un array fácil de buscar
                $combinacionesExistentes = array_map(function ($item) {
                    return (array) $item;
                }, $combinacionesExistentes);

                // Crear un array asociativo para búsquedas rápidas
                $combinacionesExistentesArray = [];
                foreach ($combinacionesExistentes as $combinacion) {
                    $key = $combinacion['nodo_padre'] . '-' . $combinacion['posicion'] . '-' . $combinacion['nivel_nodo'];
                    $combinacionesExistentesArray[$key] = true;
                }

                // Filtrar las posiciones
                $posicionesFiltradas = array_filter($posicionesDisponibles, function ($posicion) use ($combinacionesExistentesArray) {
                    $key = $posicion['userInvId'] . '-' . $posicion['posicion'] . '-' . $posicion['nivel'];
                    return !isset($combinacionesExistentesArray[$key]);
                });
                $posicionesFiltradas = array_values($posicionesFiltradas);
            } else {
                // No se encontró una inversión en proceso para el usuario
                Log::info("No se encontró una inversión en proceso para el usuario con ID: $id");
            }
        } catch (\Exception $e) {
            // Manejar cualquier excepción ocurrida durante la búsqueda de la inversión
            Log::error("Error al determinar posiciones disponibles para el usuario con ID: $id. Error: " . $e->getMessage());
        }

       
        return $posicionesFiltradas;
    }*/


    /*private function determinarPosicionesDisponiblesRecursivo($id, $nivelActual, &$posicionesDisponibles)
    {
        $id = intval($id);


        // Verificar posiciones disponibles para el nodo actual
        $tienePosicionIzquierda = NodoUsuInversion::where('nodo_padre', $id)
            ->where('nivel_nodo', $nivelActual)
            ->where('posicion', 'izquierda')
            ->exists();
        $tienePosicionDerecha = NodoUsuInversion::where('nodo_padre', $id)
            ->where('nivel_nodo', $nivelActual)
            ->where('posicion', 'derecha')
            ->exists();

        // $usr_inv = DB::table('usuario_inversion')->where("id_usu_inv", $id)->get(); 
        $usr_inv = DB::table('usuario_inversion')
            ->join('inversion', 'usuario_inversion.inversion_idInversion', '=', 'inversion.idInversion')
            ->select('usuario_inversion.*', 'inversion.invPunto', 'inversion.invGanancia')
            ->where('usuario_inversion.id_usu_inv', $id)
            ->get();

        // Registrar información sobre las posiciones disponibles
        if (!$tienePosicionIzquierda) {

            $id_usuario = $usr_inv[0]->usuario_idUsuario;

            $usuario = Usuario::find($id_usuario); // Buscar el usuario por su id

            if ($nivelActual === 0) {
                $nivelActual = 1;
            }

            $posicionesDisponibles[] = ['userInvId' => $id, 'posicion' => 'izquierda', 'nivel' => $nivelActual, 'usuNombre' => $usuario->usuNombre, 'puntos' => $usr_inv[0]->invPunto];
        }

        if (!$tienePosicionDerecha) {
            $id_usuario = $usr_inv[0]->usuario_idUsuario;
            $usuario = Usuario::find($id_usuario);
            if ($nivelActual === 0) {
                $nivelActual = 1;
            }
            $posicionesDisponibles[] = ['userInvId' => $id, 'posicion' => 'derecha', 'nivel' => $nivelActual, 'usuNombre' => $usuario->usuNombre, 'puntos' => $usr_inv[0]->invPunto];
        }

        // Obtener nodos hijos para el nodo actual
        $usuariosDirecto = NodoUsuInversion::where('nodo_padre', $id)
            ->where('nivel_nodo', $nivelActual)
            ->get();

        if ($usuariosDirecto->count() > 0) {
            // Llamada recursiva para los nodos hijos
            foreach ($usuariosDirecto as $usuarioDirecto) {
                $this->determinarPosicionesDisponiblesRecursivo($usuarioDirecto->usu_inv_id, $nivelActual + 1, $posicionesDisponibles);
            }
        }

    }*/

    private function determinarPosicionesDisponiblesRecursivo($id, $nivelActual, &$posicionesDisponibles)
    {
        $id = intval($id);
        Log::info("niveles", ['nivel actual' => $nivelActual]);
        Log::info("id inveriosn", ["id inversion" => $id]);

        // Verificar posiciones disponibles para el nodo actual
        $tienePosicionIzquierda = NodoUsuInversion::where('nodo_padre', $id)
            ->where('nivel_nodo', $nivelActual)
            ->where('posicion', 'izquierda')
            ->exists();
        $tienePosicionDerecha = NodoUsuInversion::where('nodo_padre', $id)
            ->where('nivel_nodo', $nivelActual)
            ->where('posicion', 'derecha')
            ->exists();

        // $usr_inv = DB::table('usuario_inversion')->where("id_usu_inv", $id)->get(); 
        $usr_inv = DB::table('usuario_inversion')
            ->join('inversion', 'usuario_inversion.inversion_idInversion', '=', 'inversion.idInversion')
            ->select('usuario_inversion.*', 'inversion.invPunto', 'inversion.invGanancia')
            ->where('usuario_inversion.id_usu_inv', $id)
            ->get();

        // Registrar información sobre las posiciones disponibles
        if (!$tienePosicionIzquierda) {

            $id_usuario = $usr_inv[0]->usuario_idUsuario;

            $usuario = Usuario::find($id_usuario); // Buscar el usuario por su id

            //Agregue Login de Usuario
            $posicionesDisponibles[] = ['userInvId' => $id, 'posicion' => 'izquierda', 'nivel' => $nivelActual, 'usuNombre' => $usuario->usuNombre, 'usuLogin' => $usuario->usuLogin, 'puntos' => $usr_inv[0]->invPunto];
        }

        if (!$tienePosicionDerecha) {
            $id_usuario = $usr_inv[0]->usuario_idUsuario;
            $usuario = Usuario::find($id_usuario);
            //Agregue Login de Usuario
            $posicionesDisponibles[] = ['userInvId' => $id, 'posicion' => 'derecha', 'nivel' => $nivelActual, 'usuNombre' => $usuario->usuNombre, 'usuLogin' => $usuario->usuLogin, 'puntos' => $usr_inv[0]->invPunto];
        }

        // Obtener nodos hijos para el nodo actual
        $usuariosDirecto = NodoUsuInversion::where('nodo_padre', $id)
            ->where('nivel_nodo', $nivelActual)
            ->get();

        if ($usuariosDirecto->count() > 0) {
            // Llamada recursiva para los nodos hijos
            foreach ($usuariosDirecto as $usuarioDirecto) {
                $this->determinarPosicionesDisponiblesRecursivo($usuarioDirecto->usu_inv_id, $nivelActual + 1, $posicionesDisponibles);
            }
        }
    }


    public function buscarUsuariosConMismoPadre($idPatrocinador)
    {
        // Buscar los usuario_id asociados al idPatrocinador
        $usuarios = NodoUsuInversion::where('nodo_padre', $idPatrocinador)->pluck('usu_inv_id')->toArray();

        if (empty($usuarios)) {
            // Si no se encontraron usuarios asociados al patrocinador, retorna un mensaje de error
            return response()->json(['error' => 'No se encontraron usuarios asociados al patrocinador'], 404);
        }

        // Loguear para verificar que estás recibiendo los datos correctamente
        Log::info("Usuarios con mismo nodo padre:", ['usuarios' => $usuarios]);

        // Devolver los usuarios encontrados como respuesta JSON
        return response()->json(['usuarios' => $usuarios]);
    }

    public function determinarTipoNodoNuevoUsuario($posicion, $nivel)
    {
        // Determinar el tipo de nodo basado en la posición y el nivel
        if ($nivel == 0) {
            return 'Raíz';
        } elseif ($nivel == 1) {
            return 'Padre';
        } elseif ($nivel > 1 && $posicion == '') {
            return 'Nieto';
        } else {
            return 'Hijo';
        }
    }


    public function index()
    {
        $nodoUsuInversion = NodoUsuInversion::all();

        // Recorrer los nodos de usuario
        foreach ($nodoUsuInversion as $nodo) {
            // Obtener el usuario correspondiente al usuario_id del nodo            
            //  $dataUsuInv = DB::table('usuario_inversion')->where('id_usu_inv', $nodo->usu_inv_id)->get();
            $dataUsuInv = DB::table('usuario_inversion as ui')
                ->select('ui.*', 'u.usuNombre', 'u.usuLogin', 'i.invPunto', 'i.invGanancia')
                ->join('usuario as u', 'ui.usuario_idUsuario', '=', 'u.idUsuario')
                ->join('inversion as i', 'ui.inversion_idInversion', '=', 'i.idInversion')
                ->where('ui.id_usu_inv', $nodo->usu_inv_id)
                ->first();

            if ($dataUsuInv) {
                $nodo->usuNombre = $dataUsuInv->usuNombre;
                $nodo->usuLogin = $dataUsuInv->usuLogin;
                $nodo->puntos = $dataUsuInv->invPunto;
            } else {
                // Log para indicar que no se encontraron resultados
                Log::info('No se encontraron datos de usuario inversión para id_usu_inv: ' . $nodo->usu_inv_id);
            }
        }


        // Devolver la respuesta JSON con los nodos de usuario actualizados
        return $nodoUsuInversion;
    }

    public function seleccionarPosicionNodo(array $data)
    {

        PosicionNodoUsuInv::create([
            'fecha' => date('Y-m-d-H-i-s'),
            'posicion' => $data['posicion'],
            'nivel_nodo' => $data['nivel'],
            'nodo_padre' => $data['userPadre'],
            'tipo_nodo' => $data['tipoNodo'],
            'usr_referido_id' => $data['usuarioId'],
            'estado_posicion' => 'SELECCIONADO'

        ]);
    }

    public function seleccionarPosicionNodoReasignar(array $data)
    {

        PosicionNodoUsuInv::create([
            'fecha' => date('Y-m-d-H-i-s'),
            'posicion' => $data['posicion'],
            'nivel_nodo' => $data['nivel'],
            'nodo_padre' => $data['userPadre'],
            'tipo_nodo' => $data['tipoNodo'],
            'usr_referido_id' => $data['usuarioId'],
            'estado_posicion' => 'PENDIENTE'

        ]);
    }

    public function actualizarPosicionNodo($id)
    {

        $posicionNodo = PosicionNodoUsuInv::find($id);
        if ($posicionNodo) {
            // Actualizar el estado de la posición
            $affected = DB::table('posicion_nodo_usuinv')
                ->where('id', $id)
                ->whereIn('estado_posicion', ['PENDIENTE', 'REASIGNADO'])
                //->where('estado_posicion', 'PENDIENTE')
                ->update(['estado_posicion' => 'ASIGNADO']);
            // Guardar los cambios en la base de datos

        }
    }
}
