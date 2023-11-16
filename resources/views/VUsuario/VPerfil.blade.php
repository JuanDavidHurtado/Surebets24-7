@extends('layouts/dashboard')

@section('content')

<div class="main row">
    <div class="col">
        <section class="profile-setting">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h3>Ajustes de Perfil</h3>
                    </div>
                </div>
            </div>
            @if(request()->has('Message'))

            <div class="bd-callout bd-callout-primary alert d-flex justify-content-between align-items-start" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fal fa-info-circle me-2"></i> {{ urldecode(request()->input('Message')) }}

                </div>
                <button class="close-btn pt-1" @click.prevent="skipNotification"><i class="fal fa-times text-white"></i>
                </button>
            </div>
            @endif

            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="upload-img">
                        <form id="form_1">

                            <div class="img-box">
                                <input accept="image/*" name="imagen" type="file" id="imagen" onchange="previewImage()" />
                                <span class="select-file text-white">Elige imagen</span>
                                <img id="frame" src="{{ asset('darkpurple/img/default.png') }}" alt="preview user image" />
                            </div>

                            <h4 class="golden-text">
                                <span id="usu_login"></span> <sup>
                                    <span id="miSpanLv" class="badge badge-pill bg-outline-success badge_lavel_style text-white border-1">
                                    </span>
                                </sup>
                            </h4>
                            <h5>
                                <p id="usu_nom"></p>
                            </h5>
                            <p id="fecha_union"></p>
                            <button type="submit" class="gold-btn btn-custom">Actualización de Imagen</button>
                        </form>

                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="edit-area">
                        <div class="profile-navigator">
                            <button tab-id="tab1" class="darkblue-text-bold tab  active">
                                Inf. Perfil </button>
                            <button tab-id="tab2" class="darkblue-text-bold tab ">
                                Ajuste Contraseña </button>
                            <button tab-id="tab3" class="darkblue-text-bold tab ">
                                Verificación Identidad </button>
                            <button tab-id="tab4" class="darkblue-text-bold tab ">
                                Verificación Dirección </button>
                        </div>

                        <div id="tab1" class="content  active">
                            <form id="form_2">
                                <div class="row">
                                    <div class="col-md-4 mb-4 input-box">
                                        <label for="lastname" class="golden-text">Documento</label>
                                        <input autocomplete="off" type="text" id="documento" name="documento" class="form-control" />
                                    </div>

                                    <div class="col-md-4 mb-4 input-box">
                                        <label for="firstname" class="golden-text">Nombres</label>
                                        <input autocomplete="off" type="text" class="form-control" name="nombre" id="nombre" />
                                    </div>

                                    <div class="col-md-4 mb-4 input-box">
                                        <label for="lastname" class="golden-text">Apellidos</label>
                                        <input autocomplete="off" type="text" id="apellido" name="apellido" class="form-control" />
                                    </div>

                                    <div class="col-md-6 mb-4 input-box">
                                        <label for="username" class="golden-text">Nombre Usuario</label>
                                        <input autocomplete="off" type="text" id="login" name="login" class="form-control" />
                                    </div>

                                    <div class="col-md-6 mb-4 input-box">
                                        <label for="email" class="golden-text">Correo</label>
                                        <input autocomplete="off" type="email" name="correo" id="correo" class="form-control" />
                                    </div>

                                    <div class="col-md-12 mb-10 input-box">
                                        <label for="phone" class="golden-text">Numero Telefono</label>
                                        <input autocomplete="off" type="text" id="telefono" name="telefono" class="form-control" />
                                    </div>

                                    <div class="col-12 mb-4 input-box">
                                        <label for="address" class="golden-text">Direccion</label>
                                        <textarea autocomplete="off" class="form-control" id="direccion" name="direccion" cols="30" rows="3">HELLO</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="gold-btn btn-custom">Actualizar Usuario</button>
                            </form>
                        </div>

                        <div id="tab2" class="content ">
                            <form id="form_3">
                                <div class="row">
                                    <div class="col-md-6 mb-4 input-box">
                                        <label for="current_password" class="golden-text">Contraseña Actual</label>
                                        <input type="password" id="actual_clave" name="actual_clave" autocomplete="off" class="form-control" placeholder="Contraseña Actual" />
                                    </div>

                                    <div class="col-md-6 mb-4 input-box">
                                        <label for="password" class="golden-text">Nueva Contraseña</label>
                                        <input type="password" id="clave" name="clave" autocomplete="off" class="form-control" placeholder="Nueva Contraseña" />
                                    </div>

                                    <div class="col-12 mb-4 input-box">
                                        <label for="password_confirmation" class="golden-text">Confirmar
                                            Contraseña</label>
                                        <input type="password" id="clave_conf" name="clave_conf" autocomplete="off" class="form-control" placeholder="Confirmar Contraseña" />
                                    </div>
                                </div>
                                <button type="submit" class="gold-btn btn-custom">
                                    Actualiza Contraseña </button>
                            </form>
                        </div>

                        <div id="tab3" class="content ">
                            <div class="alert mb-0">
                                <i aria-hidden="true" class="far fa-bell mr-2"></i>
                                <span> Tu nombre de usuario ya esta verificado</span>
                            </div>
                        </div>

                        <div id="tab4" class="content ">
                            <div class="alert mb-0">
                                <i aria-hidden="true" class="far fa-bell mr-2"></i>
                                <span> Notificación de direccion ya verificado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="{{ asset('js/usuario/perfil.js') }}"></script>

@endsection