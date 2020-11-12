<?php


namespace App\Presenters\Product;


use App\Helpers\Number\Number;
use App\Models\User;
use App\Presenters\Contracts\Presenter;
use Illuminate\Support\Str;

class ProductPresenter extends Presenter
{


    public function getShortDescription()
    {
        return Str::limit(strip_tags($this->entity->description), 20, '...');
    }



    public function price(){
        return Number::numberSeparator($this->entity->price);
    }

    public function getFinalPrice()
    {

        return Number::numberSeparator($this->entity->price * ((100 - $this->entity->discount) / 100));
    }


}


