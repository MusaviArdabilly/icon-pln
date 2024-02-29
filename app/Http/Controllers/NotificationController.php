<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function getUnreadNotifications() {
        $notifications = Notification::where('user_id', Auth::user()->id)
                                    ->orderBy('created_at', 'desc')
                                    ->limit(3)
                                    ->get();

        // $notifications = Auth::user()->unreadNotifications;

        // dd($notifications);

        return response()->json(['notifications' => $notifications]);
    }
}
