<?php


namespace App\Presenters\Share;

use App\Helpers\PersianDate\PersianDate;
use Hekmatinasser\Verta\Verta;

trait DateConverter
{

    public function getPersianDate($date)
    {

        if(is_null($date)){
            return 'نامشخص';
        }
        $v = new PersianDate($date);
        return $v->format('j-%B-Y----- H:i');

    }



    public function getCreatedAt()
    {

        return $this->getPersianDate($this->entity->created_at);
    }

    public function getUpdatedAt()
    {
        return $this->getPersianDate($this->entity->updated_at);
    }
}
