<?php

namespace App\Models;

use App\RepeatRelation\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use BelongsToUser;
    protected $guarded = [
        'id'
    ];










    /*
     * Start Define Relation
    */



    // Use BelongsToUser trait





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
