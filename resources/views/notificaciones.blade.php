<h1>Notificaciones</h1>

@if (auth()->user()->unreadNotifications->count() == 0)
    <p>No tienes notificaciones por leer.</p>
@else
    <ul>
        @foreach (auth()->user()->unreadNotifications as $notification)
            <li>{{ $notification->data['titulo'] }}</li>
            @php
                $notification->markAsRead();
            @endphp
        @endforeach
    </ul>
@endif