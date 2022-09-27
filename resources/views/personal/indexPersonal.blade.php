@extends('layouts.main', ['activePage' => 'personal', 'titlePage' => __('Lista de Personal')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bacTituloPrincipal">
                                    <h4 class="card-title">Personal</h4>
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
                                                <th>Ciudad</th>
                                                <th>Residente</th>
                                                <th>Telefono</th>
                                                <th>Estatus</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($personal as $persona)
                                                    <tr>
                                                        <td>{{ $persona->id }}</td>
                                                        <td>{{ $persona->nombre }}</td>
                                                        <td>{{ $persona->ciudad }}</td>
                                                        <td>{{ $persona->residente }}</td>
                                                        <td>{{ $persona->telefono }}</td>
                                                        <td>{{ $persona->estatus }}</td>

                                                        <td class="td-actions text-right">
                                                            {{-- @can('user_show') --}}
                                                            <a href="{{ route('persona.show', $persona->id) }}"
                                                                class="btn btn-info"><i
                                                                    class="material-icons">person</i></a>
                                                            {{-- @endcan --}}
                                                            {{-- @can('user_edit') --}}
                                                            <a href="{{ route('users.edit', $persona->id) }}"
                                                                class="btn btn-warning"><i
                                                                    class="material-icons">edit</i></a>
                                                            {{-- @endcan --}}
                                                            {{-- @can('user_destroy') --}}
                                                            <form action="{{ route('users.delete', $persona->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('Seguro?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>
                                                            {{-- @endcan --}}
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
                                    {{ $personal->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
