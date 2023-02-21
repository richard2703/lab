@extends('layouts.main', ['activePage' => 'Tickets', 'titlePage' => __('Resultados')])
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
                                {{ $ticket->apellido }} - {{ $examen->nombre }}</h4>
                            {{-- <p class="card-category">Usuarios registrados</p> --}}
                        </div>
                        <div class="card-body ">

                            <form class="row alertaGuardar" action="{{ route('resultados.update') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-12 col-sm-4 mx-auto">
                                    {{-- @can('user_create') --}}
                                    <label class="labelTitulo">Estatus:</label></br>
                                    <select class="form-select" id="estatus" name="estatus" aria-label="Default">
                                        <option value="1" {{ $toma->estatus == 1 ? 'selected' : '' }}>Revisando
                                        </option>
                                        <option value="2" {{ $toma->estatus == 2 ? 'selected' : '' }}>Terminado
                                        </option>
                                    </select>
                                    {{-- @endcan --}}
                                </div>


                                <div class="row pt-3">
                                    <label class="labelTitulo">Parametros:</label></br>
                                    <div class="col-12 " style=" display: contents;">
                                        @forelse ($parametros as $parametro)
                                            <div class=" col-12 col-sm-6  col-lg-4 my-1">
                                                <input type="hidden" name="parametro[]" value={{ $parametro->toma }}>
                                                <label class="mb-3">{{ $parametro->nombre }} </label>
                                                @if ($parametro->respuesta == 1)
                                                    <input type="number" name="respuesta[]" id=""
                                                        class="inputCaja" value="{{ $parametro->resultado }}">
                                                @elseif ($parametro->respuesta == 2)
                                                    <input type="text" name="respuesta[]" id=""
                                                        class="inputCaja" value="{{ $parametro->resultado }}">
                                                    {{--  @elseif ($parametro->respuesta == 3)
                                                    <select name="{{ $campo->nombre }}" id="{{ $campo->nombre }}"
                                                        class="form-control">
                                                        <option value="positivo">Positivo</option>
                                                        <option value="negativo">Negativo</option>
                                                    </select>  --}}
                                                @endif
                                            </div>
                                        @empty
                                            <label> No hay </label>
                                        @endforelse
                                    </div>
                                </div>

                                <div class="row ">
                                    <input type="hidden" name="toma" value="{{ $examen->toma }}">
                                    </br>
                                    <div class=" col-12 col-sm-6   my-1">
                                        <label class="labelTitulo">Notas: </label>
                                        <p>
                                            <textarea class="inputCaja" name="nota" rows="5"cols="25" style="border-color: #5C7C26;">{{ $toma->nota }}</textarea>
                                        </p>
                                    </div>
                                    <div class=" col-12 col-sm-6   my-1">
                                        <label class="labelTitulo">Comentarios:</label>
                                        <p>
                                            <textarea class="inputCaja" name="comentario" rows="5" cols="25" style="border-color: #5C7C26;">{{ $toma->comentario }}</textarea>
                                        </p>
                                    </div>

                                </div>
                                <div class="col-12 text-end mb-3 "><br>
                                    <button type="submit" class="btn botonGral" onclick="alertaGuardar()">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


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
