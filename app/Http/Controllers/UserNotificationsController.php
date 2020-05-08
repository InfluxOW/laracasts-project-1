<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        $notifications = currentUser()->unreadNotifications()->paginate(10);
        $notifications->markAsRead();

        return view('notifications.show', compact('notifications'));
    }
}
