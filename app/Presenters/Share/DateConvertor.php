<?php


namespace App\Presenters\Share;


use Hekmatinasser\Verta\Verta;

trait DateConvertor
{

    public function getPersianDate($date)
    {

        if(is_null($date)){
            return 'نامشخص';
        }
        $v = new Verta($date);
        $v->timezone = 'Asia/Tehran';
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
