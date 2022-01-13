<?php

namespace App\Vendor\Sms;

class VendorC implements SmsVendor{

    static function send($dstPhoneNumber, $message){
        //function to send sms by Vendor
        return 'Send to by Vendor C';
    }
}
