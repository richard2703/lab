@extends('layouts.main', ['activePage' => 'Maquilas', 'titlePage' => __('Maquilas')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bacTituloPrincipal">
                                    <h4 class="card-title">Maquilas</h4>
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
                                            <a href="{{ route('maquilas.create') }}">
                                                <button type="button" class="btn botonGral">Añadir maquila</button>
                                            </a>
                                            {{-- @endcan --}}
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="labelTitulo">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Direccion</th>
                                                <th>Telefono </th>
                                                <th>Correo</th>
                                                <th>Encargado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($maquilas as $maquila)
                                                    <tr>
                                                        <td>{{ $maquila->id }}</td>
                                                        <td>{{ $maquila->nombre }}</td>
                                                        <td>{{ $maquila->direccion }}</td>
                                                        <td>{{ $maquila->telefono }}</td>
                                                        <td>{{ $maquila->correo }}</td>
                                                        <td>{{ $maquila->encargado }}</td>

                                                        <td class="td-actions text-right">
                                                            @can('user_show')
                                                                <a href="#">
                                                                    <i class="bi bi-person-vcard  colorVolverGral"></i></a>
                                                            @endcan
                                                            @can('user_edit')
                                                                <a href="{{ route('maquilas.edit', $maquila->id) }}">

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
                                    {{ $maquilas->links() }}
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
