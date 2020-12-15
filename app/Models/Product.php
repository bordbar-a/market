<?php

namespace App\Models;

use App\Presenters\Contracts\Presentable;
use App\Presenters\Product\ProductPresenter;
use App\Traits\BelongsToUser;
use App\Traits\MorphManyComments;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use BelongsToUser ,MorphManyComments, Presentable;
    protected $guarded = [
        'id'
    ];


    protected $presenter = ProductPresenter::class;









    /*
     * Start Define Relation
    */



    // Use BelongsToUser , MorphManyComments trait , for relation

    public function orders()
    {
        return $this->
        belongsToMany(Order::class, 'order_product', 'product_id', 'order_id')->
        withPivot('price', 'discount', 'final_price')->withTimestamps();
    }


    public function categories()
    {
        return $this->
        belongsToMany(Category::class , 'category_product' , 'product_id' ,'category_id');
    }





    /*
     * End Of Define Relation
     */




}
