<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ControlRegistro extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
   
       /*
        $user = User::create(request(['name','email','password','avatar']));
       
        auth()->login($user);
        return redirect()->to('/');
        */
      
         // procesar y almacenar la imagen de avatar
        
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('public/avatars', $filename);
        } else {
            $path = null;
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'avatar' => $path, // guardar la ruta de la imagen de avatar
        ]);

//Auth::login($user);

        return redirect()->to('/');
    }
}
 