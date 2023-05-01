<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.sidebar {
		position: fixed;
		top: 0;
		left: 0;
		bottom: 0;
		width: 300px;
		background-color: #2d3e50;
		color: #fff;
	}

	.sidebar-header {
		height: 100px;
		display: flex;
		align-items: center;
		justify-content: center;
		text-align: justify;
	}

	.logo img {
		height: 90px;
		width: 100px;
		border-radius: 50%;
		margin-left: auto;
        margin-right: 55px;
		margin-top: 20px;
	}

	.sidebar-menu {
		list-style: none;
		padding: 0;
		margin: 0;
	}
	.sidebar-brand-text {
    display: inline;
}

	.menu-item {
		margin-bottom: 10px;
	}

	.menu-item a {
		display: flex;
		align-items: center;
		height: 40px;
		padding: 0 20px;
		border-radius: 5px;
		transition: background-color 0.2s ease;
	}

	.menu-item a:hover {
		background-color: #ffffff;
		color: #000000;
	}

	.menu-item a i {
		margin-right: 10px;
	}

	.menu-item a span {
		flex: 1;
		font-size: 16px;
	}
	#mi-tabla {
        margin-left: auto;
        margin-right: 50px;
        max-width: 1100px;
    }
	.mx-5 p {
      color: #2d3e50;
    }
    .mx-5 p span.user-name {
      color: red;
    }
    .avatar {
	  height: 60px;
      width: 60px;
      border-radius: 50%;
    }
	.notification-count {
		position: absolute;
		top: -8px;
		right: -8px;
		background-color: #f00;
		color: #fff;
		border-radius: 50%;
		font-size: 11px;
		width: 18px;
		height: 18px;
		text-align: center;
		line-height: 16px;
	}	
	nav {
		background-color: #ccc; /* Fondo gris */
		color: #fff; /* Texto blanco */
		box-shadow: 0px 5px 12px -5px black; /* Sombra negra */
		/* Otras propiedades de estilo de la barra de navegación */
	}
	#panel {
		position: absolute;
		top: 150px; /* Ajusta la posición superior según tu diseño */
		left: 400px; /* Ajusta la posición izquierda según tu diseño */
		right: 100px;
		bottom: 0;
		overflow: auto;
		background-color: #f7f7f7;
		border-left: 1px solid #ddd;
	}
	.panel-header {
		height: 80px; /* Ajusta la altura según tu diseño */
		background-color: #a889ff;
		border-bottom: 1px solid #ddd;
	}
	</style>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
       
       <!-- Bootstrap Bundle with Popper -->
       <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   
    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

	<title>Document</title>
</head>
<body>
		<nav class="flex py-5 bg-gray-400 text-white">
			
		<ul class="w-1/2 px-16 ml_auto flex justify-end pt-1">	
				
		@if(auth()->check())
				<span style="font-size: 2em; color: #2d3e50; position: absolute; top: 30px; left: 1500px; ">
					<a href="{{ route('notificaciones') }}">
						<i class="fas fa-bell"></i>
						@if(auth()->user()->unreadNotifications->count())
							<span class="notification-count">{{ auth()->user()->unreadNotifications->count() }}</span>
						@endif
					</a>
				</span>
				<li class="mx-5" style="position: absolute; top: 10px; left: 1550px;">
					<img src="{{ '../storage/app/'. Auth::user()->avatar }}" alt="Avatar" class="avatar">
				<p class="text-xl"><b>{{ auth()->user()->name }}</b></p>
				</li>
			<div style="position: relative;">
				<li>
					<a href="{{ route('login.destroy')}}" class="font-semiblod hover:bg-blue-900 text-white py-3 px-4 rounded-md" style="position: absolute; top: -45px; right: 350px;">Cerrar Sesión </a>
				</li>
			</div>
			
		@else
		<div style="position: relative;">
				<li>
					<a href="{{ route('login.destroy')}}" class="font-semiblod border-2 border-blue-500 py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700" style="position: absolute; top: -30px; left: 800px;">Salir </a>
				</li>
			</div>
		@endif  
		</ul>
		
		</nav>

<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="logo">
            <img src="{{URL::asset('/images/logo.png')}}" alt="Logo">
			<div _ngcontent-nxv-c22="" class="sidebar-brand-text mx-4">CONTROL CHAPARINA</div>
        </a>		
    </div>
	<hr _ngcontent-nxv-c22 class = "sidebar-divider my-8">
    <ul class="sidebar-menu">
        <li class="menu-item">
            <a href="{{ route('mapa') }}">
			<i class="fas fa-map-marker-alt"></i>
                <span>Mapa</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="">
                <i class="fas fa-tag"></i>
                <span>Ventas</span>
            </a>
        </li>
        <li class="menu-item">
		    <a href="{{ route('animalesLista.indexVet')}}">
				<i class="fas fa-book"></i>
                <span>Datos Veterinarios</span>
            </a>
        </li>
		<li class="menu-item">
            <a href="{{ route('animalesLista.index')}}">
				<i class="fas fa-horse"></i>
                <span>Animales</span>
            </a>
        </li>
		<li class="menu-item">
            <a href="{{ route('animalesLista.index2')}}">
                <i class="fas fa-cog"></i>
                <span>Animales Fuera del Corral</span>
            </a>
        </li>
    </ul>
</nav>
@yield('content')

</body>
</html>