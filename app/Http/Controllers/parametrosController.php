<?php

namespace App\Http\Controllers;

use App\Models\parametros;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class parametrosController extends Controller
{
    public function index()
    {
        $parametros = parametros::paginate(5);
        return view('examenes.indexParametros', compact('parametros'));
    }

    public function store(Request $request)
    {
        parametros::create($request->only('nombre', 'tipo', 'alto', 'bajo', 'medicion', 'escrito', 'referencia', 'respuesta'));
        Session::flash('message', 1);
        return redirect()->back();
    }

    public function update(Request $request, parametros $parametro)
    {
        $data = $request->only('nombre', 'tipo', 'alto', 'bajo', 'medicion', 'escrito', 'referencia', 'respuesta');
        $parametro->update($data);
        Session::flash('message', 1);
        return redirect()->action([parametrosController::class, 'index']);
    }

    public function destroy(parametros $parametro)
    {
        $parametro->delete();
        Session::flash('message', 2);
        return redirect()->action([parametrosController::class, 'index']);
    }
}
