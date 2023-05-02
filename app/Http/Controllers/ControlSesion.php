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

       // dd(request(['email','password']));
       if(auth()->attempt(request(['email','password'])) == false)
        {            
            return back()->withErrors(['message' => 'El usuario o contraseña es incorrecto, INCORRECTO!']);    
        }
        
        //if(request('email')=='admin@chaparina.com'){
           
            return redirect()->to('/animales'); 
        
        
       
        //
        /*
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Si el usuario ha iniciado sesión correctamente, redirige a la página de inicio

            // Recupera los datos del usuario autenticado
            $user = Auth::user();

            // Recupera la ruta del archivo de avatar, si está disponible
            $avatar_path = $user->avatar;

            if(request('email')=='admin@chaparina.com'){
                return redirect()->to('/setup'); 
            }else{
                return redirect()->to('/animales'); 
            }
        } else {
            // Si la autenticación falla, redirige de vuelta al formulario de inicio de sesión
            return back()->withErrors(['message' => 'El usuario o contraseña es incorrecto, INCORRECTO!']);
        }*/
       
        
    }

    public function destroy(Request $request){
        Fugados::truncate();
        //auth()->logout();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');     
    }
}
