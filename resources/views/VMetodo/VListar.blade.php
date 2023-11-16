@extends('layouts/dashboard')

@section('content')

<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Registrar Metodo de Pago</h3>
        </div>
        <div class="row">
            <div class="col-lg-5 mb-4">
                <div class="search-bar">
                    <form id="myForm">
                        <div class="row g-3">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Titular</label>
                                    <input autocomplete="off" required type="text" id="titular" name="titular" class="form-control" placeholder="Titular" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Tipo Cuenta</label>
                                    <select name="tipo" id="tipo" class="form-control" required>
                                        <option value="" selected disabled class="text-white">[Seleccione]</option>
                                        <option value="Cuenta de Ahorros" class="text-white">Cuenta de Ahorros</option>
                                        <option value="Cuenta Corriente" class="text-white">Cuenta Corriente</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Documento</label>
                                    <input autocomplete="off" required type="text" id="documento" name="documento" class="form-control" placeholder="Documento" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Banco</label>
                                    <input autocomplete="off" required type="text" id="banco" name="banco" class="form-control" placeholder="Banco" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="input-box">
                                    <label for="email" class="darkblue-text-bold">Numero Cuenta</label>
                                    <input autocomplete="off" required type="text" id="numero" name="numero" class="form-control" placeholder="Numero de Cuenta" />
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <button class="btn-custom" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                    <!-- Contenedor para el mensaje -->
                    <div class="mensaje-container">
                        <span>En este momento no puedes registrar un nuevo método de pago, ya cuentas con un método de pago activo
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mb-4">
                <div class="search-bar">
                    <span>Cuenta de Banco</span>
                    <hr>
                    <div class="table-parent table-responsive">
                        <table class="table table-striped" id="tabla-contenido">
                            <thead>
                                <tr>
                                    <th>Titular</th>
                                    <th>Banco</th>
                                    <th>Tipo Cuenta</th>
                                    <th>N° cuenta</th>
                                    <th>Documento</th>
                                    <th>Opcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Las filas se agregarán aquí -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/metodo_pago/metodo.js') }}"></script>
@endsection