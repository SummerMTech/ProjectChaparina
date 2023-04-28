@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Notificaciones</h1>
        <ul>
            @foreach(auth()->user()->unreadNotifications as $notification)
                <li>
                    <strong>{{ $notification->data['animal_name'] }}</strong> tiene más de 10 años.
                    <form action="{{ route('notifications.update', $notification->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Marcar como leída</button>
                    </form>
                    <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
