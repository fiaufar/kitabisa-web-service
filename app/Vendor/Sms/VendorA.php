<?php

namespace App\Vendor\Sms;

class VendorA implements SmsVendor{

    static function send($dstPhoneNumber, $message){
        //function to send sms by Vendor
        return 'Send by Vendor A';
    }
}
