<?php

namespace App\Http\Controllers;

use App\Models\examenes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\parametros;
use App\Models\examenParametro;



class examenesController extends Controller
{
    public function index()
    {
        $examenes = examenes::paginate(10);
        return view('examenes.indexExamenes', compact('examenes'));
    }

    public function create()
    {
        $parametros = parametros::get();
        return view('examenes.createExamenes', compact('parametros'));
    }

    public function store(Request $request)
    {
        // dd($request->input('parametros', []));
        $examen = examenes::create($request->only('nombre', 'costo'));
        // $examen->parametros()->sync($request->input('parametros', []));

        dd('store');

        // $role = Role::create($request->only('name'));

        // // $role->permissions()->sync($request->input('permissions', []));
        // $role->syncPermissions($request->input('permissions', []));

        // return redirect()->route('roles.index');
    }

    public function show(examenes $examenes)
    {
        //
    }

    public function edit(examenes $examenes)
    {
        //
    }

    public function update(Request $request, examenes $examenes)
    {
        //
    }

    public function destroy(examenes $examenes)
    {
        //
    }
}
