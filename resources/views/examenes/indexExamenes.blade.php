@extends('layouts.main', ['activePage' => 'Examenes', 'titlePage' => __('Lista de Personal')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bacTituloPrincipal">
                                    <h4 class="card-title">Parametros</h4>
                                    {{-- <p class="card-category">Usuarios registrados</p> --}}
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('faild'))
                                        <div class="alert alert-danger" role="faild">
                                            {{ session('faild') }}
                                        </div>
                                    @endif
                                    <div class="row justify-content-end">
                                        <div class="col-2 text-center mb-5">
                                            {{-- @can('user_create') --}}
                                            <button type="button" class="botonSinFondo " data-bs-toggle="modal"
                                                data-bs-target="#modal-nuevo"><img
                                                    style="width: 30px;"src="{{ '/img/inventario/nuevo.svg' }}"></button>
                                            <p>Nuevo</p>

                                            {{-- @endcan --}}
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="labelTitulo">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Baja</th>
                                                <th>Alta </th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($examenes as $examen)
                                                    <tr>
                                                        <td>{{ $examen->id }}</td>
                                                        <td>{{ $examen->nombre }}</td>
                                                        <td>{{ $examen->bajo }}</td>
                                                        <td>{{ $examen->alto }}</td>
                                                        <td class="td-actions text-right">
                                                            {{--  @can('user_show')
                                                                <a href="{{ route('users.show', $parametro->id) }}">
                                                                    <i class="bi bi-person-vcard  colorVolverGral"></i></a>
                                                            @endcan  --}}
                                                            @can('user_edit')
                                                                {{--  <button class="botonSinFondo mx-2 " title="Resurtir"
                                                                    type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#modal-update"
                                                                    onclick="cargar('{{ $examen->id }}','{{ $examen->nombre }}','{{ $parametro->bajo }}','{{ $parametro->alto }}')">
                                                                    <i class="bi bi-pencil-fill "></i>
                                                                </button>  --}}
                                                            @endcan
                                                            @can('user_destroy')
                                                                <form class="alertaBorrar"
                                                                    action="{{ route('parametros.delete', $examen->id) }}"
                                                                    method="POST" style="display: inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btnSinFondo" type="submit"
                                                                        onclick="alertaBorrar()" rel="tooltip">
                                                                        <i class="bi bi-x-circle"></i>
                                                                    </button>
                                                                </form>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="2">Sin registros.</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $examenes->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Modal Nuevo --}}
    <div class="modal fade" id="modal-nuevo" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-nuevo"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-12">
                    <div class="card ">
                        <form action="{{ route('parametros.store') }}" method="post">
                            @csrf
                            <div class="card-header bacTituloPrincipal ">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">
                                            <h2 class="titulos">Nuevo Parametro </h2>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row  card-body">
                                <div class="row card-body" style="
					 text-align: center;">
                                    <div class="col-12 ">
                                        <img style="width: 100px;" id="imagenM">
                                    </div>
                                    <div class="col-12 mb-3 ">
                                        <label class="labelTitulo" for="">Nombre:</label></br>
                                        <input class="inputCaja" type="text" id="nombre" name="nombre" value=""
                                            required></br>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="labelTitulo" for="">Bajo:</label></br>
                                        <input class="inputCaja" type="number" step="0.01" min="0.01" id="bajo"
                                            name="bajo" value="" required></br>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="labelTitulo" for="">Alto:</label></br>
                                        <input class="inputCaja" type="number" step="0.01" min="0.01" id="alto"
                                            name="alto" value="" required></br>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12  mb-3 d-flex  justify-content-center align-self-end">
                                <button type="submit" class="btn botonGral ">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Modal Update --}}
    <div class="modal fade" id="modal-update" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-update"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-12">
                    <div class="card ">
                        <form action="{{ route('parametros.update', 1) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-header bacTituloPrincipal ">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">
                                            <h2 class="titulos">Actualizar Parametro </h2>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row  card-body">
                                <div class="row card-body" style="
					 text-align: center;">
                                    <div class="col-12 ">
                                        <img style="width: 100px;" id="imagenM">
                                    </div>
                                    <div class="col-12 mb-3 ">
                                        <input type="hidden" name="id" id="id">
                                        <label class="labelTitulo" for="">Nombre:</label></br>
                                        <input class="inputCaja" type="text" id="nombreU" name="nombre"></br>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="labelTitulo" for="">Bajo:</label></br>
                                        <input class="inputCaja" type="number" step="0.01" min="0.01"
                                            id="bajoU" name="bajo"></br>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="labelTitulo" for="">Alto:</label></br>
                                        <input class="inputCaja" type="number" step="0.01" min="0.01"
                                            id="altoU" name="alto"></br>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12  mb-3 d-flex  justify-content-center align-self-end">
                                <button type="submit" class="btn botonGral ">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/alertas.js') }}"></script>

    <script>
        function Guardado() {
            // alert('test');
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Guardado con exito'
            })
        }
        var slug = '{{ Session::get('message') }}';
        if (slug == 1) {
            Guardado();

        }
        if (slug == 2) {
            Borrado();

        }
    </script>
    <script>
        function cargar(id, nombre, baja, alta) {
            const parametroid = document.getElementById('id');
            parametroid.value = id;
            const parametronombre = document.getElementById('nombreU');
            parametronombre.value = nombre;
            const parametrobajo = document.getElementById('bajoU');
            parametrobajo.value = baja;
            const parametroalto = document.getElementById('altoU');
            parametroalto.value = alta;
        }
    </script>
@endsection
