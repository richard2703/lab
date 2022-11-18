@extends('layouts.main', ['activePage' => 'inventario', 'titlePage' => __('Dashboard Inventario')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 align-self-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex ">
                                <div class="col-12 col-md-6 text-center my-4">
                                    <a href="{{ route('inventario.index', 'herramientas') }}" class="">
                                        <img src="/img/inventario/herramientas.svg" alt="equipos" title="Herramientas"
                                            width="30%" class="botonIconoPrincipal">
                                        <p class="mt-4 texticonos">Herramientas</p>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 text-center my-4">
                                    <a href="{{ route('inventario.index', 'refacciones') }}" class="">
                                        <img src="/img/inventario/refacciones.svg" alt="personal" title="Refacciones"
                                            width="30%" class="botonIconoPrincipal">
                                        <p class="mt-4 texticonos">Refacciones</p>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 text-center my-4">
                                    <a href="{{ route('inventario.index', 'consumibles') }}" class="">
                                        <img src="/img/inventario/consumible.svg" alt="inventario" title="Consumibles"
                                            width="30%" class="botonIconoPrincipal">
                                        <p class="mt-4 texticonos">Consumibles</p>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 text-center my-4">
                                    <a href="{{ route('inventario.index', 'combustibles') }}" class="">
                                        <img src="/img/inventario/combustible.svg" alt="obras" title="Combustibles"
                                            width="30%" class="botonIconoPrincipal">
                                        <p class="mt-4 texticonos">Combustibles</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!--Footer-->
                        <div class="card-footer mr-auto">
                        </div>
                        <!--End footer-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
