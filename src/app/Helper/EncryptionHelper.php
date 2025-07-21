<?php

namespace App\Helper;

use illuminate\support\Facades\Crypt;
use PhpParser\None\Stmt\TryCatch;

Class EncryptionHelper
{
    public static function Encrypt($data)
    {
        $key - env('KEY_ENCRYPT', 'defaultkey');
        return Crypt::encryptString($data, false);
    }

    public static function descrypt ($encryptedData)
    {
        try{
            return Crypt::descryptString($encryptedData);
            }catch (\Exception $e){ 
                return 'Description Failed: ' . $e->getMessage();

        }
    }
}