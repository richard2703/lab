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
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            {{-- @can('user_create') --}}
                                            <a href="{{ route('personal.create') }}">
                                                <button type="button" class="btn botonGral">Añadir personal</button>
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
                                                <th>Profesión </th>
                                                <th>Teléfono</th>
                                                <th>Mail</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($parametros as $parametro)
                                                    <tr>
                                                        <td>{{ $parametro->id }}</td>
                                                        <td>{{ $parametro->nombres }}</td>
                                                        <td>{{ $parametro->apellidoP }}</td>
                                                        <td>{{ $parametro->profe }}</td>
                                                        <td>{{ $parametro->celular }}</td>
                                                        <td>{{ $parametro->mailEmpresarial }}</td>

                                                        <td class="td-actions text-right">
                                                            @can('user_show')
                                                                <a href="{{ route('users.show', $parametro->id) }}">
                                                                    <i class="bi bi-person-vcard  colorVolverGral"></i></a>
                                                            @endcan
                                                            @can('user_edit')
                                                                <a href="{{ route('users.edit', $parametro->id) }}"><i
                                                                        class="bi bi-pencil-fill colorVolverGral"></i></a>
                                                            @endcan
                                                            @can('user_destroy')
                                                                <form action="{{ route('users.delete', $parametro->id) }}"
                                                                    method="POST" style="display: inline-block;"
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
                                    {{ $parametros->links() }}
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
