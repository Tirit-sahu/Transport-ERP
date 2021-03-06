<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptionController extends Controller
{
    
    public function encrypt($string)
   {
        $encrypted = Crypt::encryptString($string);
        return $encrypted;
   }

    public function decrypt($string)
    {
         $decrypt= Crypt::decryptString($string);
         return $decrypt;
    }

}
