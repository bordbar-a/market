<?php


namespace App\Helpers\Number;


class Number
{


    public static function numberSeparator($value)
    {

        return number_format($value);
    }

}
