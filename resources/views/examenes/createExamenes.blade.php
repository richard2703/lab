@extends('layouts.main', ['activePage' => 'Examenes', 'titlePage' => __('Alta de Obra')])
@section('content')
    <div class="content">
        @if ($errors->any())
            <!-- PARA LA CARGA DE LOS ERRORES DE LOS DATOS-->
            <div class="alert alert-danger">
                <p>Listado de errores a corregir</p>
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 align-self-start">
                    <div class="card">
                        <div class="card-body contCart">
                            <div class="p-1 align-self-start bacTituloPrincipal">
                                <h2 class="my-3 ms-3 texticonos ">Nuevo Examen</h2>
                            </div>

                            <form class="row alertaGuardar" action="{{ route('examenes.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-12  my-3 ">
                                    <div class="row">
                                        <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                            <label class="labelTitulo">Nombre:</label></br>
                                            <input type="text" class="inputCaja" id="nombre" name="nombre"
                                                value="{{ old('nombre') }}">
                                        </div>
                                        <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                            <label class="labelTitulo">costo:</label></br>
                                            <input type="number" class="inputCaja" id="costo" name="costo"
                                                value="{{ old('costo') }}">
                                        </div>
                                        <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                            <label class="labelTitulo">Costo Maquila:</label></br>
                                            <input type="number" class="inputCaja" id="maquila" name="maquila"
                                                value="{{ old('maquila') }}">
                                        </div>
                                        <div class="row ">
                                            <label class="labelTitulo">Parametros:</label></br>
                                            <div class="col-12 " style=" display: contents;">
                                                @forelse ($parametros as $parametro)
                                                    <div class=" col-12 col-sm-6 col-lg-4 my-1">
                                                        <input type="checkbox" id="{{ $parametro->id }}" name="parametros[]"
                                                            value="{{ $parametro->id }}">
                                                        <label for="{{ $parametro->id }}"> {{ $parametro->nombre }}</label>
                                                    </div>
                                                @empty
                                                    <label> No hay </label>
                                                @endforelse


                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-12 text-end mb-3 ">
                            <button type="submit" class="btn botonGral" onclick="alertaGuardar()">Guardar</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
