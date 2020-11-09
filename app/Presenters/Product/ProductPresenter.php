<?php


namespace App\Presenters\Product;


use App\Models\User;
use App\Presenters\Contracts\Presenter;
use Illuminate\Support\Str;

class ProductPresenter extends Presenter
{


    public function getDescription()
    {
        return Str::limit(strip_tags($this->entity->description), 20, '...');
    }


    public function getFinalPrice()
    {

        return $this->entity->price * ((100 - $this->entity->discount) / 100);
    }


}


