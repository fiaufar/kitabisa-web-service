<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\SmsNotificationService as ServicesSmsNotificationService;
use Illuminate\Http\Request;

class SmsNotificationController extends Controller
{
    public function sendNotification(Request $request)
    {
        $dstPhoneNumber = $request->input('dstPhoneNumber');
        $message = $request->input('message');

        $res  = ServicesSmsNotificationService::sendNotification(
            $dstPhoneNumber,
            $message
        );

        if ($res) {
            return response()->json(['message' => $res], 200);
        }

        return response()->json(['message' => $res], 400);
    }
}
