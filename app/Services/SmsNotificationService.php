<?php

namespace App\Services;

use App\Factory\SmsVendorFactory as FactorySmsVendorFactory;

class SmsNotificationService {

    static public function sendNotification($dstPhoneNumber, $message){
        $smsVendor = FactorySmsVendorFactory::createVendor();
        return $smsVendor::send($dstPhoneNumber, $message);
    }
}
