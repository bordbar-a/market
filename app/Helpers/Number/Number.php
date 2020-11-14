<?php


namespace App\Helpers\Number;


class Number
{


    public static function numberSeparator(float $value)
    {

        return number_format($value);
    }

}
