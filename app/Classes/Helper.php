<?php


namespace App\Classes;


class Helper
{
    /**
     *  Default words per minute value
     */
    const WORDS_PER_MINUTE = 200;

    /**
     * Calculates minutes to read article
     *
     * @param $content
     *
     * @return false|float
     */
    public static function minutesToRead($content)
    {
        return ceil(str_word_count($content) / self::WORDS_PER_MINUTE);
    }

}
