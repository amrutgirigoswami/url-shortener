<?php

namespace App\Helpers;

use App\Models\Url;

class ShortCodeGenerator
{
    public static function generate($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        do {
            $code = substr(str_shuffle($characters), 0, $length);
        } while (Url::where('short_code', $code)->exists());

        return $code;
    }
}
