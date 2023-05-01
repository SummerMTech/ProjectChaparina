<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Animales;
use App\Models\Fugados;
use Illuminate\Http\Request;
use App\Models\Notification;
class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animales = Animales::all();
        $fugados = Animales::select('animales.nombre','animales.avatarVaca','fugados.codigo','fugados.fechaFuga')
        ->join('fugados', 'animales.codigo', '=', 'fugados.codigo')->get();
         
        return view('animales.index', compact('animales', 'fugados'));
    }
    public function index2()
    {
        $animales = Animales::all();
        $fugados = Animales::select('animales.nombre','animales.avatarVaca','fugados.codigo','fugados.fechaFuga')
        ->join('fugados', 'animales.codigo', '=', 'fugados.codigo')->get();
         
        return view('animales.index2', compact('animales', 'fugados'));
    }

    public function indexVet()
    {
        $animales = Animales::all();
                
        return view('animales.indexVet', compact('animales'));
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
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function show(Animales $animales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function edit(Animales $animales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animales $animales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animales $animales)
    {
        //
    }
}
