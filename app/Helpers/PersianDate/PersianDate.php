<?php


namespace App\Helpers\PersianDate;


use Hekmatinasser\Verta\Verta;

class PersianDate extends Verta
{

    public function __construct($datetime = null, $timezone ='Asia/Tehran' )
    {
        parent::__construct($datetime, $timezone);
        $this->timezone = $timezone;
    }
}
