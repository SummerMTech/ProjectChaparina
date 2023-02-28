<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ControlSesion extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == true)
        {            
            //return redirect()->to('/animales');
            return back()->withErrors(['message' => 'El usuario o contraseña es incorrecto, intenta otra vez!']);    
        }else{
                return redirect()->to('/animales'); 
        } 
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');     
    }
}
