<?php


namespace App\Classes;


use Illuminate\Support\Str;

class Helper
{

    public static function minutesToRead($content)
    {
        return ceil(str_word_count($content) / 200);
    }

}
