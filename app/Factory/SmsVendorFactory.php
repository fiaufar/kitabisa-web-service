<?php

namespace App\Factory;

use App\Vendor\Sms\VendorA;
use App\Vendor\Sms\VendorB;
use App\Vendor\Sms\VendorC;

class SmsVendorFactory
{
    private static $VENDOR;
    private static $VENDOR_NAME;

    public static function createVendor()
    {
        $vendorConf = config('sms.vendor');

        if (isset(self::$VENDOR) && self::$VENDOR_NAME == $vendorConf) return self::$VENDOR;
        self::$VENDOR_NAME = $vendorConf;

        switch ($vendorConf) {
            case 'vendor a':
                self::$VENDOR = new VendorA();
                break;
            case 'vendor b':
                self::$VENDOR = new VendorB();
                break;
            case 'vendor c':
                self::$VENDOR = new VendorC();
                break;
        }

        return self::$VENDOR;
    }
}
