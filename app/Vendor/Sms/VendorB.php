<?php

namespace App\Vendor\Sms;

class VendorB implements SmsVendor{

    static function send($dstPhoneNumber, $message){
        //function to send sms by Vendor
        return 'Send by Vendor B';
    }
}
