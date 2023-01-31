@extends('layouts.main', ['activePage' => 'Examenes', 'titlePage' => __('Examenes')])
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
                                <h2 class="my-3 ms-3 texticonos ">Editar Examen</h2>
                            </div>

                            <form class="row alertaGuardar" action="{{ route('examenes.update', $examene->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12  my-3 ">
                                    <div class="row">
                                        <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                            <label class="labelTitulo">Nombre:</label></br>
                                            <input type="text" class="inputCaja" id="nombre" name="nombre"
                                                value="{{ $examene->nombre }}">
                                        </div>
                                        <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                            <label class="labelTitulo">costo:</label></br>
                                            <input type="number" class="inputCaja" id="costo" name="costo"
                                                value="{{ $examene->costo }}">
                                        </div>
                                        <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                            <label class="labelTitulo">Costo Maquila:</label></br>
                                            <input type="number" class="inputCaja" id="maquila" name="maquila"
                                                value="{{ $examene->maquila }}">
                                        </div>
                                        <div class="row ">
                                            <label class="labelTitulo">Parametros:</label></br>
                                            <div class="col-12 " style=" display: contents;">
                                                @forelse ($parametros as $id => $parametro)
                                                    <div class=" col-12 col-sm-6 col-lg-4 my-1">
                                                        <input type="checkbox" id="{{ $id }}" name="parametros[]"
                                                            value="{{ $id }}"
                                                            {{ $examene->parametros->contains($id) ? 'checked' : '' }}>
                                                        <label for="{{ $id }}"> {{ $parametro }}</label>
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
