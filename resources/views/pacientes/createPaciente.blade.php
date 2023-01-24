@extends('layouts.main', ['activePage' => 'pacientes', 'titlePage' => __('Pacientes')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 align-self-start">
                    <div class="card">
                        <div class="card-body contCart">
                            <form class="row alertaGuardar" action="{{ route('pacientes.store') }}" method="post"class="row"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="p-1 align-self-start bacTituloPrincipal">
                                    <h2 class="my-3 ms-3 texticonos ">Alta de Paciente</h2>
                                </div>
                                <div class="row mt-3">
                                    {{--  <div class="col-12 col-md-4  my-3">
                                        <div class="text-center mx-auto border vistaFoto mb-4">
                                            <i><img class="imgVista img-fluid mb-2"
                                                    src="{{ asset('/img/general/default.jpg') }}"></i>
                                            <span class="mi-archivo"> <input class="mb-4 ver " type="file" name="foto"
                                                    id="mi-archivo" accept="image/*"></span>
                                            <label for="mi-archivo">
                                                <span class="">sube imagen</span>
                                            </label>
                                        </div>
                                    </div>  --}}

                                    {{--  <div class="col-12 col-md-8 ">  --}}
                                    <div class="col-12">

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

                                        </div>
                                    </div>

                                    <div class="col-12 text-end mb-3 ">
                                        <button type="submit" class="btn botonGral"
                                            onclick="alertaGuardar()">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        jQuery('input[type=file]').change(function(){
         var filename = jQuery(this).val().split('\\').pop();
         var idname = jQuery(this).attr('id');
         console.log(jQuery(this));
         console.log(filename);
         console.log(idname);
         jQuery('span.'+idname).next().find('span').html(filename);
        });
        </script>
@endsection
