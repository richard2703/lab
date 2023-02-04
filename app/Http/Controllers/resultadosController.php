<?php

namespace App\Http\Controllers;

use App\Models\resultados;
use App\Models\tomas;
use App\Models\tickets;
use App\Models\examenes;
use App\Models\parametros;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class resultadosController extends Controller
{

    public function index($ticket)
    {
        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
            ->where('tickets.id', $ticket)
            ->first();

        $examenes = tomas::join('examenes', 'tomas.examenes_id', 'examenes.id')
            ->select('examenes.id', 'examenes.nombre', 'tomas.estatus')
            ->paginate(10);
        // dd($ticket);

        // $tomas = tomas::paginate(10);
        return view('resultados.indexresultados', compact('ticket', 'examenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            ->get();

        // dd($request);
        // MANDAR A VER LOS PARAMETROS Y LLENARLOS
        return view('resultados.createresultados', compact('ticket', 'examen'));
    }

    public function store(Request $request)
    {
        dd('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function show(resultados $resultados)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function edit(resultados $resultados)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resultados $resultados)
    {
        dd('update');
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
}
