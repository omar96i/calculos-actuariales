<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\isNull;

class SendNotificationMiddleware
{


    protected function validateNotification($notification)
    {
        if ($notification->updated_at->isToday() && !$notification->notification_sent) {
            return true;
        } else {
            return false;
        }
    }



}
