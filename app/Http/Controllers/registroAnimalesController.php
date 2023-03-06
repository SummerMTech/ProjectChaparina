<?php

namespace App\Http\Controllers;
use App\Models\Animales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registroAnimalesController extends Controller
{
    public function create(){
        return view('auth.registroAnimales');
    }
    public function store(Request $request){
        $datos = $request->all();
        //dd($datos);
        // Guardar los datos en la base de datos utilizando una consulta SQL
        DB::insert('INSERT INTO animales (nombre, codigo, sexo, peso, edad, raza, numeroVacunas, numeroCrias) VALUES (?, ?, ?, ?, ?, ?, ?, ?)', [$datos['name'], $datos['codigo'],$datos['sexo'],$datos['peso'],$datos['edad'],$datos['raza'],$datos['vacunas'],$datos['crias']]);

        //$newAnimal = animales::insert('INSERT INTO tu_tabla (nombre, codigo) VALUES (?, ?)', [$datos['nombre'], $datos['codigo']]);
        //$newAnimal = animales::create(request(['nombre','codigo','sexo','peso','edad','raza','numeroVacunas','numeroCrias']));
        return redirect()->to('/setup');
    }
}
