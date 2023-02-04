@extends('layouts.main', ['activePage' => 'Tickets', 'titlePage' => __('Alta de Ticket')])
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
                        <div class="card-header bacTituloPrincipal">
                            <h4 class="card-title">Ticket N°: {{ $ticket->id }} - {{ $ticket->nombre }}
                                {{ $ticket->apellido }} - {{ $examen[0]->nombre }}</h4>
                            {{-- <p class="card-category">Usuarios registrados</p> --}}
                        </div>
                        <div class="card-body ">
                            <div class="row justify-content-end">
                                {{--  <div class="col-2 text-center">
                                    @can('user_create')
                                    <a href="{{ route('tickets.create') }}">
                                        <button type="button" class="botonSinFondo ">
                                            <img style="width: 30px;"src="{{ '/img/inventario/nuevo.svg' }}"></button>
                                        <p>Nuevo paciente</p>

                                    </a>

                                    @endcan
                                </div>  --}}
                            </div>

                            <form class="row alertaGuardar" action="{{ route('tickets.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="paciente_id" value="1">
                                {{--  <div class="col-12  my-3 ">
                                    <div class="row">
                                        <div class=" col-12 col-sm-6 col-lg-4 mb-3 ">
                                            <label class="labelTitulo">Nombre:</label></br>
                                            <input type="text" class="inputCaja" id="nombre" name="nombre"
                                                value="">
                                        </div>

                                        <div class=" col-12 col-sm-6 col-lg-4 mb-3 ">
                                            <label class="labelTitulo">Apellido:</label></br>
                                            <input type="text" class="inputCaja" id="apellido" name="apellido"
                                                value="">
                                        </div>

                                        <div class=" col-12 col-sm-6 col-lg-4 mb-3 ">
                                            <label class="labelTitulo">Telefono:</label></br>
                                            <input type="text" class="inputCaja" id="telefono" name="telefono"
                                                value="">
                                        </div>

                                        <div class=" col-12 col-sm-6 col-lg-4 mb-3 ">
                                            <label class="labelTitulo">Fecha de nacimiento:</label></br>
                                            <input type="date" class="inputCaja" id="nacimiento" name="nacimiento"
                                                value="">
                                        </div>

                                        <div class=" col-12 col-sm-6 col-lg-4 mb-3 ">
                                            <label class="labelTitulo">Doctor:</label></br>
                                            <input type="text" class="inputCaja" id="doctor" name="doctor"
                                                value="">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class=" col-12 col-sm-6  mb-3 ">
                                            <label class="labelTitulo">Total:</label></br>
                                            <input type="text" class="inputCaja" id="total" name="total"
                                                value="0" readonly>
                                        </div>

                                        <div class=" col-12 col-sm-6  mb-3 ">
                                            <label class="labelTitulo">Abono:</label></br>
                                            <input type="text" class="inputCaja" id="abono" name="abono"
                                                value="">
                                        </div>
                                    </div>
                                </div>  --}}
                                {{--  <div class="row ">
                                    <div class=" col-12  mb-3 ">
                                        <label class="labelTitulo">Maquila:</label></br>
                                        <select class="form-select" id="maquila" name="maquila"
                                            aria-label="Default select example">
                                            <option selected>Seleccione</option>
                                            <option value="1">Maquinaria 1</option>
                                            <option value="2">Maquinaria 2</option>
                                        </select>
                                    </div>
                                </div>  --}}
                                <div class="row ">
                                    <label class="labelTitulo">Parametros:</label></br>
                                    <div class="col-12 " style=" display: contents;">
                                        @forelse ($examen as $exame)
                                            <div class=" col-12 col-sm-6  my-1">
                                                <label>{{ $exame->nombre }} </label>
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

    <script>
        function sumar(id, valor) {
            if ($('#' + id).prop("checked")) {
                total = (parseFloat(document.getElementById('total').value) + parseFloat(valor)).toFixed(2);
            } else {
                total = (parseFloat(document.getElementById('total').value) - parseFloat(valor)).toFixed(2);
            }
            document.getElementById('total').value = total;
        }
    </script>

@endsection
