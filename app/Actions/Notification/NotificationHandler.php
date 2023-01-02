<?php
namespace App\Actions\Notification;

use Illuminate\Support\Str;
use App\Models\Notification;

class NotificationHandler
{
    public static function createNotification($request)
    {
        return Notification::create([
            'reference' => Str::ulid(),
            'message' => $request->message
        ]);
    }

    public static function notifications()
    {
        return Notification::all();
    }
}