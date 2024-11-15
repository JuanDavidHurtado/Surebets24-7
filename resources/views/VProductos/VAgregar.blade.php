@extends('layouts/dashboard')

@section('content')
<div role="alert" id="mensajeProducto"
    class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start d-none">
    <div class="d-flex align-items-center"><i aria-hidden="true" class="fal fa-info-circle me-2">
        </i> Producto agregado.
    </div> <button class="close-btn pt-1" id="buttonMensajeAlert"><i aria-hidden="true"
            class="fal fa-times text-white"></i></button>
</div>
<div class="main row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Producto</h3>
        </div>
        <div id="errorAlert" class="alert alert-danger d-none" role="alert">

        </div>
        <div class="search-bar" style="background-color:#444746">
            <form id="agregarProductoForm">
                <div class="row g-2">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="input-box">
                            <label for="nombre" class="darkblue-text-bold">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <div class="input-box">
                            <label for="valor" class="darkblue-text-bold">Valor</label>
                            <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor"
                                pattern="^\d+(\.\d{1,2})?$" required autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <div class="input-box">
                            <label for="valor_diario" class="darkblue-text-bold">Valor Diario</label>
                            <input type="number" class="form-control" id="valor_diario" name="valor_diario"
                                placeholder="Valor Diario" pattern="^\d+(\.\d{1,2})?$" required autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <div class="input-box">
                            <label for="ganancia" class="darkblue-text-bold">Valor Neto a Ganar</label>
                            <input type="number" class="form-control" id="ganancia" name="ganancia"
                                placeholder="Valor Ganado" pattern="^\d+(\.\d{1,2})?$" required autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <div class="input-box">
                            <label for="dias" class="darkblue-text-bold">Dias</label>
                            <input type="number" class="form-control" id="dias" name="dias" placeholder="Dias"
                                pattern="^\d+(\.\d{1,2})?$" required autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <div class="input-box">
                            <label for="puntos" class="darkblue-text-bold">Puntos</label>
                            <input type="number" class="form-control" id="puntos" name="puntos" placeholder="Puntos"
                                pattern="^\d+(\.\d{1,2})?$" required autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <div class="input-box">
                            <label for="comision" class="darkblue-text-bold">Comision</label>
                            <input type="number" class="form-control" id="comision" name="comision"
                                placeholder="Porcentaje" pattern="^\d+(\.\d{1,2})?$" required autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="input-box">
                            <label for="imagen" class="darkblue-text-bold">Imagen</label>
                            <input accept="image/*" name="imagen" type="file" id="imagen" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <br>
                        <button class="btn-custom" type="submit">
                            Agregar
                            <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </form>

        </div>

    </div>

</div>


<script src="{{asset('js/producto.js')}}"></script>


@endsection