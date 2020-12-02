<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\OrderSend;
use Pusher\Pusher;
use Notification;

class SendNotification extends Controller
{
    public function sendToAdmin($data = [])
    {
        $getAdmin = User::whereRole(config('app.admin_role'))->get();
        Notification::send($getAdmin, new OrderSend($data));
        
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $pusher->trigger('Notify', 'send-message', $data);
    }
}
