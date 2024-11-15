@extends('layouts/dashboard')

@section('content')
    <link href="{{ asset('customer_css/customer.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script>
        var imageUrl = "{{ asset('darkpurple/img/logoInversion/experto1K.png') }}";
    </script>

    <style>
        circle {
            fill: #fff;
            stroke: rgb(230, 234, 238);
            stroke-width: 1px;
        }

        text {
            font: 16px sans-serif;
            text-anchor: middle;
        }

        line {
            fill: none;
            stroke: #e9e4e4;
            stroke-width: 0.3px;
        }


        .link {
            fill: none;
            stroke: #bbb8b8;
            stroke-width: 2px;
            stroke-dasharray: 5, 7;
            /* 5px de guiones, 5px de espacios */
        }

        #tree-container {
            width: 100%;
            height: 1000px;
            overflow: auto;
        }
    </style>
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Binario de referidos</h3>
        </div>
        <div class="col-xl-12 col-md-6">


            <div id="mensajeAlert" class="alert alert-info d-none" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="col-xl-12 col-md-6" id="tree-container"></div>


        </div>
    </div>


    <script src="{{ asset('js/referido/nodos_usuarios.js') }}"></script>
    <script>
        var imageUrl = "{{ asset('darkpurple/img/logoInversion/experto1K.png') }}";
    </script>
@endsection
