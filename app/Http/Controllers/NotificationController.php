<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
//use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Notification;
use App\Notifications\NotificarCambios;

class NotificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notifications = $user->notifications()->orderBy('created_at', 'desc')->get();
        
        return view('notifications.index', compact('notifications'));
    }

    public function unreadCount(Request $request)
    {
        $unreadCount = $request->user()->unreadNotifications()->count();
        return response()->json(['unread_count' => $unreadCount]);
    }
    public function unreadNotifications(Request $request)
    {
        $notifications = $request->user()->unreadNotifications;
        return response()->json(['notifications' => $notifications]);
    }

    public function enviarNotificacion() {
 
        $esquema = User::all();
  
        $notificacion = [
            'titulo' => 'Vaca lista para paimeo',
            'contenido' => 'un vaca ha superado los 10 años'
        ];
  
        Notification::send($esquema, new NotificarCambios($notificacion));
        //dd('llega aqjui');
       // dd('Tarea Realizada !');
    }
}
