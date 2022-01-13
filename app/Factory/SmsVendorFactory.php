<?php

namespace App\Factory;

use App\Vendor\Sms\VendorA;
use App\Vendor\Sms\VendorB;
use App\Vendor\Sms\VendorC;

class SmsVendorFactory {

    private static $VENDOR = null;

    static public function createVendor(){
        $vendorConf = env('SMS_VENDOR');

        if(SmsVendorFactory::$VENDOR) return SmsVendorFactory::$VENDOR;

        switch ($vendorConf) {
            case 'vendor a':
                SmsVendorFactory::$VENDOR = new VendorA();
                break;
            case 'vendor b':
                SmsVendorFactory::$VENDOR = new VendorB();
                break;
            case 'vendor c':
                SmsVendorFactory::$VENDOR = new VendorC();
                break;
        }

        return SmsVendorFactory::$VENDOR;
    }
}
