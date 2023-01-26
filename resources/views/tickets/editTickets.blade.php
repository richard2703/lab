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
                            <h4 class="card-title">Edicion de Ticket</h4>
                            {{-- <p class="card-category">Usuarios registrados</p> --}}
                        </div>
                        <div class="card-body ">
                            <div class="row justify-content-end">
                                <div class="col-2 text-center">
                                    {{-- @can('user_create') --}}
                                    <a href="{{ route('tickets.create') }}">
                                        <button type="button" class="botonSinFondo ">
                                            <img style="width: 30px;"src="{{ '/img/inventario/nuevo.svg' }}"></button>
                                        <p>Nuevo paciente</p>

                                    </a>

                                    {{-- @endcan --}}
                                </div>
                            </div>

                            <form class="row alertaGuardar" action="{{ route('tickets.update', $ticket->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="paciente_id" value="1">
                                <div class="col-12  my-3 ">
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
                                                value="{{ $ticket->doctor }}">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class=" col-12 col-sm-6  mb-3 ">
                                            <label class="labelTitulo">Total:</label></br>
                                            <input type="text" class="inputCaja" id="total" name="total"
                                                value="{{ $ticket->total }}" readonly>
                                        </div>

                                        <div class=" col-12 col-sm-6  mb-3 ">
                                            <label class="labelTitulo">Abono:</label></br>
                                            <input type="text" class="inputCaja" id="abono" name="abono"
                                                value="{{ $ticket->abono }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class=" col-12  mb-3 ">
                                        <label class="labelTitulo">Maquila:</label></br>
                                        <select class="form-select" id="maquila" name="maquila"
                                            aria-label="Default select example">
                                            <option selected>Seleccione</option>
                                            <option value="1" {{ $ticket->maquila = 1 ? 'selected' : '' }}>Maquinaria 1
                                            </option>
                                            <option value="2" {{ $ticket->maquila = 2 ? 'selected' : '' }}>Maquinaria 2
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row ">
                                    <label class="labelTitulo">Examenes:</label></br>
                                    <div class="col-12 " style=" display: contents;">
                                        @forelse ($examenes as $id => $examene)
                                            <div class=" col-12 col-sm-6 col-lg-4 my-1">
                                                <input type="checkbox" id="{{ $id }}" name="examenes[]"
                                                    value="{{ $id }}"
                                                    {{ $ticket->examenes->contains($id) ? 'checked' : '' }}>
                                                <label for="{{ $id }}"> {{ $examene->nombre }}</label>
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
