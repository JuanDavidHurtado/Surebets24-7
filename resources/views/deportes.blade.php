@extends('layouts/app')

@section('content')

<!-- home section -->
<section class="home-section">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-7">
                <div class="text-box">
                    <!--h5 class="my-4">Una plataforma rentable para inversiones de alto margen</h5-->
                    <h2>Aprende, invierte y gana en Surebets24/7, y conviértete en un maestro dominando las diferentes <span class="text-stroke">modalidades deportivas.</span></h2>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn-custom" href="{{route('login')}}">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="countings">
                    <div class="box">
                        <h3>25609</h3>
                        <h5>Todos los Usuarios</h5>
                    </div>
                    <div class="box">
                        <h3>12.5M</h3>
                        <h5>Inversion Promedio</h5>
                    </div>
                    <div class="box">
                        <h3>130</h3>
                        <h5>Paises Admitidos</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection