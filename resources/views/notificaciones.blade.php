<h2>Notificaciones</h2>

@if (auth()->user()->unreadNotifications->count() == 0)
    <p>No tienes notificaciones por leer.</p>
@else
    <ul>
        @foreach (auth()->user()->unreadNotifications as $notification)
            <li>{{ $notification->data['contenido'] }}</li>
            @php
                $notification->markAsRead();
            @endphp
        @endforeach
    </ul>
@endif