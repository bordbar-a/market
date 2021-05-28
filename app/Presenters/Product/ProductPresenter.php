<?php


namespace App\Presenters\Product;


use App\Helpers\Number\Number;
use App\Helpers\PersianDate\PersianDate;
use App\Models\Product;
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


    public function getStatus()
    {


        $map = [
            Product::DRAFT => '<span class="label label-warning"> '. Product::getProductStatuses(Product::DRAFT) .' </span>',
            Product::PUBLISHED => '<span class="label label-success"> '. Product::getProductStatuses(Product::PUBLISHED) .' </span>',
            Product::PENDING => '<span class="label label-danger"> '. Product::getProductStatuses(Product::PENDING) .' </span>',
            Product::FUTURE => '<span class="label label-default"> '. Product::getProductStatuses(Product::FUTURE) .' </span>',

        ];


        if (isset($map[$this->entity->status])) {
            return ($map[$this->entity->status]);
        }

        return '<span class="label label-info">N/A</span>';
    }


    public function getUpdatedAtInFooter()
    {
        $v = new PersianDate($this->entity->updated_at);
        return $v->format('l  dS %B');

    }



}


