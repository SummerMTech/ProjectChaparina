<?php

namespace App\Http\Controllers;

use App\Models\Fugados;
use Illuminate\Http\Request;

class FugadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $fugados = Fugados::all();
         return view('fugados.index', compact('fugados'));
        //
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

    public function insertarCodigo(Request $request)
    {
        $codigo = new fugados();
        $codigo->codigo = $request->input('codigo');
        $codigo -> save();
        return response()->json($codigo);
    }
    //control de ganado vacuno de la estancia Chaparina

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fugados  $fugados
     * @return \Illuminate\Http\Response
     */
    public function show(Fugados $fugados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fugados  $fugados
     * @return \Illuminate\Http\Response
     */
    public function edit(Fugados $fugados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fugados  $fugados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fugados $fugados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fugados  $fugados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fugados $fugados)
    {
        //
    }
}
