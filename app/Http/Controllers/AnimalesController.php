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

    public function editar($id)
    {
        $animal = Animales::findOrFail($id); // Busca el animal con el ID recibido

        return view('animales.editar', compact('animal')); // Muestra la vista de edición de animales
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('avatarAnimales')) {
            $image = $request->file('avatarAnimales');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('public/avatarsAnimales', $filename);
        } else {
            $path = null;
        }

        $animal = Animales::findOrFail($id); // Busca el animal con el ID recibido

        $animal->nombre = $request->input('nombre'); // Actualiza el nombre del animal
        $animal->codigo = $request->input('codigo'); // Actualiza la especie del animal
        $animal->sexo = $request->input('sexo'); // Actualiza el nombre del animal
        $animal->peso = $request->input('peso'); 
        $animal->edad = $request->input('edad'); // Actualiza el nombre del animal
        $animal->raza = $request->input('raza'); 
        $animal->numeroVacunas = $request->input('numeroVacunas'); // Actualiza el nombre del animal
        $animal->numeroCrias = $request->input('numeroCrias'); 
        $animal->generoCrias = $request->input('generoCrias'); // Actualiza el nombre del animal
        $animal->Proposito = $request->input('Proposito'); 
        $animal->avatarVaca = $path;
        $animal->save(); // Guarda los cambios en la base de datos

        return view('animales.index'); // Redirige a la página de la tabla de animales con un mensaje de éxito
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */

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
