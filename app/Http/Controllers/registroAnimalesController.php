<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Animales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registroAnimalesController extends Controller
{
    public function create(){
        return view('auth.registroAnimales');
    }
    public function store(Request $request){
        //$datos = $request->all();
        //DB::insert('INSERT INTO animales (nombre, codigo, sexo, peso, edad, raza, numeroVacunas, numeroCrias,avatarVaca) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)', [$datos['nombre'], $datos['codigo'],$datos['sexo'],$datos['peso'],$datos['edad'],$datos['raza'],$datos['numeroVacunas'],$datos['numeroCrias']]);
        if ($request->hasFile('avatarAnimales')) {
            $image = $request->file('avatarAnimales');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('public/avatarsAnimales', $filename);
        } else {
            $path = null;
        }

        $user = Animales::create([
            'nombre' => $request->input('nombre'),
            'codigo' => $request->input('codigo'),
            'sexo' => $request->input('sexo'),
            'peso' => $request->input('peso'),
            'edad' => $request->input('edad'),
            'raza' => $request->input('raza'),
            'numeroVacunas' => $request->input('numeroVacunas'),
            'numeroCrias' => $request->input('numeroCrias'),
            'avatarVaca' => $path, // guardar la ruta de la imagen de avatar
        ]);

        //dd($datos);
        // Guardar los datos en la base de datos utilizando una consulta SQL
       

        return redirect()->to('/setup');
    }
}
