<?php

namespace App\Http\Controllers;

use App\Models\resultados;
use App\Models\tomas;
use App\Models\tickets;
use App\Models\examenes;
use App\Models\parametros;
use App\Models\pacientes;
use App\Models\examenparametro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class resultadosController extends Controller
{

    public function index($ticket)
    {
        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
            ->where('tickets.id', $ticket)
            ->first();

        $examenes = tomas::join('examenes', 'tomas.examenes_id', 'examenes.id')
            ->select('examenes.id', 'examenes.nombre', 'tomas.estatus', 'tomas.id as toma')
            ->paginate(10);
        // dd($ticket);

        // $tomas = tomas::paginate(10);
        return view('resultados.indexresultados', compact('ticket', 'examenes'));
    }

    public function create(Request $request, $ticket)
    {
        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
            ->where('tickets.id', $ticket)
            ->first();
        $examen = examenes::join('examenparametro', 'examenes.id', 'examenparametro.examenes_id')
            ->join('parametros', 'parametros.id', 'examenparametro.parametros_id')
            ->select('examenes.nombre', 'parametros.nombre', 'parametros.id')
            ->where('examenes.id', $request->examen)
            ->first();
        $parametros = examenparametro::join('parametros', 'examenparametro.parametros_id', 'parametros.id')
            ->select('parametros.id', 'parametros.nombre', 'parametros.respuesta')
            ->where('examenparametro.examenes_id', $request->examen)
            ->get();

        $examen->toma = $request->toma;

        // dd($request->toma);
        // MANDAR A VER LOS PARAMETROS Y LLENARLOS
        return view('resultados.createresultados', compact('ticket', 'examen', 'parametros'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $toma = tomas::find($request->toma);
        $toma->estatus = 1;
        $toma->nota = $request->nota;
        $toma->comentario = $request->comentario;
        $toma->save();
        // dd($toma);
        $c = count($request->parametro);
        for ($i = 0; $i < $c; $i++) {
            $resultado = new resultados();
            $resultado->examenes_id = $request->examenes_id;
            $resultado->ticket_id = $request->ticket_id;
            $resultado->parametros_id = $request->parametro[$i];
            $resultado->resultado = $request->respuesta[$i];
            $resultado->save();
        }
        return redirect()->action([resultadosController::class, 'index']);
    }

    public function show(resultados $resultados)
    {
        dd('show');
    }

    public function edit(Request $request, $ticket)
    {
        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
            ->where('tickets.id', $ticket)
            ->first();
        $examen = examenes::join('examenparametro', 'examenes.id', 'examenparametro.examenes_id')
            ->join('parametros', 'parametros.id', 'examenparametro.parametros_id')
            ->select('examenes.nombre', 'parametros.nombre', 'parametros.id')
            ->where('examenes.id', $request->examen)
            ->first();
        $parametros = examenparametro::join('parametros', 'examenparametro.parametros_id', 'parametros.id',)
            ->join('resultados', 'resultados.parametros_id', 'parametros.id')
            ->select('parametros.id', 'parametros.nombre', 'parametros.respuesta', 'resultados.id as toma', 'resultados.resultado')
            ->where('examenparametro.examenes_id', $request->examen)
            ->get();

        $toma = tomas::find($request->toma);
        // dd($toma->estatus);
        $examen->toma = $request->toma;
        return view('resultados.editresultados', compact('ticket', 'examen', 'parametros', 'toma'));
    }

    public function update(Request $request)
    {
        // dd($request);
        $toma = tomas::find($request->toma);
        $toma->estatus = $request->estatus;
        $toma->nota = $request->nota;
        $toma->comentario = $request->comentario;
        $toma->save();
        dd($toma);
        $c = count($request->parametro);
        for ($i = 0; $i < $c; $i++) {
            $resultado = resultados::find($request->parametro[$i]);
            $resultado->resultado = $request->respuesta[$i];
            $resultado->save();
        }
        return redirect()->action([resultadosController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function destroy(resultados $resultados)
    {
        dd('destroy');
    }
    public function pdfResultado(Request $request)
    {
        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'pacientes.nacimiento', 'tickets.id', 'tickets.total', 'tickets.abono', 'tickets.created_at', 'tickets.doctor')
            ->where('tickets.id', $request->ticket)
            ->first();
        $examen = examenes::join('examenparametro', 'examenes.id', 'examenparametro.examenes_id')
            ->join('parametros', 'parametros.id', 'examenparametro.parametros_id')
            ->select('examenes.nombre', 'parametros.nombre', 'parametros.id')
            ->where('examenes.id', $request->examen)
            ->first();
        $parametros = examenparametro::join('parametros', 'examenparametro.parametros_id', 'parametros.id',)
            ->join('resultados', 'resultados.parametros_id', 'parametros.id')
            ->select(
                'parametros.id',
                'parametros.nombre',
                'parametros.respuesta',
                'parametros.tipo',
                'parametros.alto',
                'parametros.bajo',
                'parametros.medicion',
                'parametros.escrito',
                'parametros.referencia',
                'parametros.respuesta',
                'resultados.id as toma',
                'resultados.resultado'
            )
            ->where('examenparametro.examenes_id', $request->examen)
            ->get();
        $toma = tomas::find($request->toma);
        $examen->toma = $request->toma;

        $pacientes = pacientes::all();
        // $data = [
        //     'titulo' => 'Styde.net'
        // ];

        // return view('resultados.pdfResultado', compact('ticket', 'examen', 'parametros', 'toma'));

        return PDF::loadView('resultados.pdfResultado', compact('ticket', 'examen', 'parametros', 'toma'))
            ->setPaper('a4')
            ->stream('archivo.pdf');
    }
    public function pdftest()
    {
        $pacientes = pacientes::all();
        $data = [
            'titulo' => 'Styde.net'
        ];

        return PDF::loadView('resultados.pdftest', compact('pacientes'))
            ->setPaper('a4')
            // ->setOptions(['defaultFont' => 'sans-serif'])
            ->stream('archivo.pdf');

        // return view('resultados.pdftest', compact('pacientes'));

        // dd($pacientes);
    }
}
