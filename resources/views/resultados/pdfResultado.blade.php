<html>

<head>
    <style>
        /**
Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
puede ser de altura y anchura completas.
**/
        @page {
            margin: 0cm 0cm;
        }

        /** Defina ahora los márgenes reales de cada página en el PDF **/
        body {
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /** Definir las reglas del encabezado **/
        header {
            position: relative;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Estilos extra personales **/
            background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 1.5cm;
        }

        /** Definir las reglas del pie de página **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Estilos extra personales **/
            background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 1.5cm;
        }

        .page-break {
            page-break-after: always;
        }
    </style>

    {{--  <!-- Google Web Fonts -->  --}}
    {{--  <link rel="preconnect" href="https://fonts.googleapis.com">  --}}
    {{--  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  --}}
    <link {{--  href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"  --}} {{--  rel="stylesheet">  --}} {{--  <!-- Icon Font Stylesheet -->  --}} {{--  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">  --}} <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    {{--  <!-- Libraries Stylesheet -->  --}}
    {{--  <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">  --}}


    <!--ESTA ETIQUETA ES EL ENLACE CON BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Fonts -->
    {{--  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">  --}}


</head>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        Cabecera del documento
    </header>

    <footer>
        Copyright © {{ date('Y') }}
    </footer>

    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="content p-3">
            <div>
                <p class="fw-medium text-uppercase text-primary mb-2">Fecha:
                    {{ \Carbon\Carbon::parse($ticket->created_at)->locale('es')->isoFormat(' D \d\e MMMM \d\e\l Y') }}
                </p>
                <p class="fw-medium text-uppercase text-primary mb-2">Paciente: {{ $ticket->nombre }}
                    {{ $ticket->apellido }} Edad: {{ \Carbon\Carbon::parse($ticket->nacimiento)->age }}
                </p>
                <p class="fw-medium text-uppercase text-primary mb-2">DR(A):
                    @if ($ticket->doctor == null || $ticket->doctor == '')
                        A quien corresponda
                    @elseif (1 == 1)
                        {{ $ticket->doctor }}
                    @endif
                </p>
                <h1 class="display-5 mb-4">{{ $examen->nombre }}</h1>
            </div>
            <div class="col-10 mx-auto">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="labelTitulo">
                            <th></th>
                            <th>Resultado</th>
                            <th>Unidad</th>
                            <th>Referencia</th>
                        </thead>
                        <tbody>
                            {{--  {{ $ticket->maquila = 1 ? 'selected' : '' }}  --}}
                            @forelse ($parametros as $parametro)
                                <tr>
                                    <td><b> {{ $parametro->nombre }} </b></td>
                                    <td>
                                        @if ($parametro->respuesta == 1)
                                            @if ($parametro->resultado <= $parametro->bajo || $parametro->resultado >= $parametro->alto)
                                                <b> {{ $parametro->resultado }}</b>
                                            @else
                                                {{ $parametro->resultado }}
                                            @endif
                                        @elseif ($parametro->respuesta == 2)
                                            @if ($parametro->resultado != $parametro->referencia)
                                                <b> {{ $parametro->resultado }}</b>
                                            @else
                                                {{ $parametro->resultado }}
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($parametro->medicion == null || $parametro->medicion == '')
                                            N/A
                                        @elseif (1 == 1)
                                            {{ $parametro->medicion }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($parametro->respuesta == 1)
                                            {{ $parametro->bajo }} - {{ $parametro->alto }}
                                        @elseif ($parametro->respuesta == 2)
                                            {{ $parametro->referencia }}
                                        @endif
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
        </div>

    </main>
    <h1>Pagina 1</h1>
    <div class="page-break"></div>
    <h1>Pagina 2</h1>
    <script type="text/php">
	if ( isset($pdf) ) {
		$pdf->page_script('
			$font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
			$pdf->text(270, 730, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
		');
	}
</script>
</body>

</html>
