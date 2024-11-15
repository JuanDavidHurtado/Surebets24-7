@extends('layouts/dashboard')

@section('content')
    <div class="main row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Realizar la Transaccion</h3>
            </div>

            <div class="alert alert-dismissible fade show d-none" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fal fa-info-circle me-2" id="alert-icon"></i>
                    <span id="msg"></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>



            <div class="search-bar" style="background-color:#444746;">
                <form id="girSal">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-box">
                                <label for="fecha" class="darkblue-text-bold">Fecha</label>
                                <input readonly required type="text" class="form-control" value="{{ date('y-m-d') }}"
                                    name="fecha" id="fecha" />
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="input-box">
                                <label for="codigo" class="darkblue-text-bold">Codigo</label>
                                <input autocomplete="off" type="text" id="codigo" name="codigo" class="form-control"
                                    placeholder="Codigo" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="input-box">
                                <label for="monto" class="darkblue-text-bold">Monto</label>
                                <input autocomplete="off" type="text" id="monto" name="monto" class="form-control"
                                    placeholder="Monto" />
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 input-box">
                            <label for="observacion" class="golden-text">Observacion</label>
                            <textarea autocomplete="off" class="form-control" id="observacion"
                                style=" background-color: #444746 !important; color: white !important;" name="observacion" cols="30"
                                rows="3" placeholder="Observacion"></textarea>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <button class="btn-custom" type="submit">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script src="{{ asset('js/saldo/girar.js') }}"></script>
@endsection
