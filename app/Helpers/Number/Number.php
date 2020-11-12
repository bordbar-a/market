<?php


namespace App\Helpers\Number;


class Number
{


    public static function numberSeparator(int $value)
    {

        return number_format($value);
    }

}
