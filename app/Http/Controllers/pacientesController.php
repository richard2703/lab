<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pacientesController extends Controller
{
    // FALTA EDITAR Y BORRAR, EL DE VER SERA ESPECIAL
    public function index()
    {
        $pacientes = pacientes::paginate(5);
        return view('pacientes.indexPacientes', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.createPaciente');
    }

    public function store(Request $request)
    {
        pacientes::create($request->only('nombre', 'apellido', 'telefono', 'nacimiento'));
        Session::flash('message', 1);
        return redirect()->action([pacientesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(pacientes $pacientes)
    {
        //
    }

    public function edit(pacientes $paciente)
    {
        return view('pacientes.editPaciente', compact('paciente'));
    }

    public function update(Request $request, pacientes $paciente)
    {
        $paciente->update($request->only('nombre', 'apellido', 'telefono', 'nacimiento'));
        Session::flash('message', 1);
        $pacientes = pacientes::paginate(5);
        return view('pacientes.indexPacientes', compact('pacientes'));
    }

    public function destroy(pacientes $paciente)
    {
        $paciente->delete();
        Session::flash('message', 2);
        $pacientes = pacientes::paginate(5);
        return view('pacientes.indexPacientes', compact('pacientes'));
    }
}
