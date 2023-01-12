<?php

namespace App\Http\Controllers;

use App\Models\examenes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class examenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('index');
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
     * @param  \App\Models\examenes  $examenes
     * @return \Illuminate\Http\Response
     */
    public function show(examenes $examenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\examenes  $examenes
     * @return \Illuminate\Http\Response
     */
    public function edit(examenes $examenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\examenes  $examenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, examenes $examenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\examenes  $examenes
     * @return \Illuminate\Http\Response
     */
    public function destroy(examenes $examenes)
    {
        //
    }
}
