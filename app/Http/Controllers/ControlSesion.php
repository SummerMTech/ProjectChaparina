<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Fugados;

use Illuminate\Http\Request;
use App\Models\User;

class ControlSesion extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){

        
        
       // dd(request(['password']));
        
       
        if(auth()->attempt(request(['email','password'])) == false)
        {            
            return back()->withErrors(['message' => 'El usuario o contraseña es incorrecto, INCORRECTO!']);    
        }
        //dd(request('email'));
        if(request('email')=='admin@chaparina.com'){
            return redirect()->to('/setup'); 
        }else{
            return redirect()->to('/animales'); 
        }
        
       
        //dd(request(['password']));
       
        
    }

    public function destroy(){
        Fugados::truncate();
        auth()->logout();
        return redirect()->to('/');     
    }
}
