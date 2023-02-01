<?php

namespace App\Http\Controllers;

use App\Models\resultados;
use App\Models\tomas;
use App\Models\tickets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class resultadosController extends Controller
{

    public function index()
    {
        $tomas = tomas::paginate(10);
        return view('resultados.indexresultados', compact('tomas'));
    }

    public function resultados($ticket)
    {
        dd($ticket);
        // $tickets = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
        // ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
        // ->paginate(10);
        $tomas = tomas::paginate(10);
        return view('resultados.indexresultados', compact('tomas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function show(resultados $resultados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function edit(resultados $resultados)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function destroy(resultados $resultados)
    {
        //
    }
}
