<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

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
}
