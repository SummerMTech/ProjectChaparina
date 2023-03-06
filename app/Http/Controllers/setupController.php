<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animales;

class setupController extends Controller
{
    //public function create(){
     //   return view('setup');
    //}

    public function create()
    {

        Animales::select('animales.nombre','fugados.codigo','fugados.fechaFuga')
        ->join('fugados', 'animales.codigo', '=', 'fugados.codigo')->get();
         

        $users = User::select('id','name','email')->where('name','!=','admin')->get();
        $animales = Animales::all();
        return view('setup',  compact('users','animales'));
    }
}
