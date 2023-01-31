<?php

namespace App\Http\Controllers;

use App\Models\examenes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\parametros;
use Illuminate\Support\Facades\Session;


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
        // $examen = examenes::find(1);

        $examen = examenes::create($request->only('nombre', 'costo', 'maquila'));
        $examen->parametros()->sync($request->input('parametros', []));
        Session::flash('message', 1);
        return redirect()->action([examenesController::class, 'index']);
    }

    public function show(examenes $examenes)
    {
    }

    public function edit(examenes $examene)
    {
        $parametros = parametros::all()->pluck('nombre', 'id');
        $examene->load('parametros');
        return view('examenes.editExamenes', compact('parametros', 'examene'));
    }

    public function update(Request $request, examenes $examene)
    {
        $examene->update($request->only('nombre', 'costo', 'maquila'));
        $examene->parametros()->sync($request->input('parametros', []));
        Session::flash('message', 1);
        $examenes = examenes::paginate(10);
        return redirect()->action([examenesController::class, 'index']);
    }

    public function destroy(examenes $examene)
    {
        $examene->delete();
        Session::flash('message', 2);
        $examenes = examenes::paginate(10);
        return view('examenes.indexExamenes', compact('examenes'));
    }
}
