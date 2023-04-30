<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
       <!-- Bootstrap Bundle with Popper -->
       <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   
    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-1200 text-gray-800">

    <nav class="flex py-3 text-white" style="background-color: #2d3e50;">
      <img src="{{URL::asset('/images/logo.png')}}"  height="70" width="90" >
      <div class="w-1/2 px-12 mr-auto" style="position: absolute; top: 35px; left: 50px;">
        <p class="text-2xl font-bold"> CONTROL CHAPARINA 
        </p>
      </div>
      <ul class="w-1/2 px-16 ml_auto flex justify-end pt-1"  style="position: absolute; top: 30px; left: 900px;">
        
          <li >
              <a href="{{ route('login.index')}}" class="font-semiblod hover:bg-indigo-600 text-white py-3 px-4 rounded-md">Ingresar </a>
              <a href="{{ route('registro.index')}}" class="font-semiblod hover:bg-indigo-600 text-white py-3 px-4 rounded-md">Registro </a>
          </li>
       
          
      
      </ul>
    
    </nav>
    
    @yield('content')  
  </body>
</html>