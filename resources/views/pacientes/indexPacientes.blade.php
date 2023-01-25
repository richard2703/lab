@extends('layouts.main', ['activePage' => 'Pacientes', 'titlePage' => __('Pacientes')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bacTituloPrincipal">
                                    <h4 class="card-title">Pacientes</h4>
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
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            {{-- @can('user_create') --}}
                                            <a href="{{ route('pacientes.create') }}">
                                                <button type="button" class="btn botonGral">Añadir paciente</button>
                                            </a>
                                            {{-- @endcan --}}
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="labelTitulo">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Telefono </th>
                                                <th>Nacimiento</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($pacientes as $paciente)
                                                    <tr>
                                                        <td>{{ $paciente->id }}</td>
                                                        <td>{{ $paciente->nombre }}</td>
                                                        <td>{{ $paciente->apellido }}</td>
                                                        <td>{{ $paciente->telefono }}</td>
                                                        <td>{{ $paciente->nacimiento }}</td>

                                                        <td class="td-actions text-right">
                                                            @can('user_show')
                                                                <a href="#">
                                                                    <i class="bi bi-person-vcard  colorVolverGral"></i></a>
                                                            @endcan
                                                            @can('user_edit')
                                                                <a href="{{ route('pacientes.edit', $paciente->id) }}">

                                                                    <i class="bi bi-pencil-fill "></i>
                                                                </a>
                                                            @endcan
                                                            @can('user_destroy')
                                                                <form action="#" method="POST"
                                                                    style="display: inline-block;"
                                                                    onsubmit="return confirm('Seguro?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btnSinFondo" type="submit" rel="tooltip">
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
                                    {{ $pacientes->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    </script>
@endsection
