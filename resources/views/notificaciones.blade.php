
@extends('layouts.sidebar')
@section('content')

<div id="panel">
    <div class="panel-header">
	<h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; top: 25px; left: 500px;">Notificaciones</h1>
    </div>
    <div class="panel-content">
        <br>
        @if (auth()->user()->unreadNotifications->count() == 0)
            <p>No tienes notificaciones por leer.</p>
        @else
            <ul>
            <div class="notification-content">
                @foreach (auth()->user()->unreadNotifications as $notification)
                        <ul>
                            <li>
                            <h2>{{ $notification->data['titulo'] }}</h2>
                            <p>{{ $notification->data['contenido'] }}</p>
                            </li>
                            
                        </ul>
                    @php
                    $notification->markAsRead();
                    @endphp
                @endforeach    
            
             </div>
               
            </ul>
        @endif
            
    </div>
</div>

@endsection


