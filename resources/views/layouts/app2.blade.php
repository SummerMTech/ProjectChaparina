<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
    .mx-5 p {
      color: yellow;
    }
    .mx-5 p span.user-name {
      color: red;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
    <title>@yield('title') - Laravel App2</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">
    
    <nav class="flex py-4 bg-blue-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold"> Control de ganado vacuno de la estancia Chaparina </p>
      </div>
      <img src="{{URL::asset('/images/vaca2.jpg')}}"  height="100" width="100" >
      <ul class="w-1/2 px-16 ml_auto flex justify-end pt-1">
      @if(auth()->check())
          <li class="mx-5">
            <p class="text-xl">Usuario: <b>{{ auth()->user()->name }}</b></p>
          </li>
          <li>
              <a href="{{ route('login.destroy')}}" class="font-semiblod border-2 border-white py-2 px-4 rounded-md hover:bg-red hover:text-indigo-700">Cerrar Sesión </a>
          </li>
      @else
          <li>
              <a href="{{ route('login.destroy')}}" class="font-semiblod border-2 border-white py-2 px-4 rounded-md hover:bg-red hover:text-indigo-700">Salir </a>
          </li> 
      @endif      
      </ul>
    
    </nav>
    
    @yield('content')  
  </body>
</html>