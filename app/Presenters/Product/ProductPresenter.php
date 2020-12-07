<?php


namespace App\Presenters\Product;


use App\Helpers\Number\Number;
use App\Helpers\PersianDate\PersianDate;
use App\Presenters\Contracts\Presenter;
use App\Presenters\Share\DateConverter;
use Illuminate\Support\Str;

class ProductPresenter extends Presenter
{

    use DateConverter;

    public function getShortDescription()
    {
        return Str::limit(strip_tags($this->entity->description), 20, '...');
    }


    public function price()
    {
        return Number::numberSeparator($this->entity->price);
    }

    public function getFinalPrice()
    {

        return Number::numberSeparator($this->entity->price * ((100 - $this->entity->discount) / 100));
    }


    public function getUpdatedAtInFooter()
    {
        $v = new PersianDate($this->entity->updated_at);
        return $v->format('l  dS %B');

    }


}


