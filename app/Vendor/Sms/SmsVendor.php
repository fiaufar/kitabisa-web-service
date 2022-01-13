<?php

namespace App\Vendor\Sms;

interface SmsVendor
{
    static function send($dstPhoneNumber, $message);
}
