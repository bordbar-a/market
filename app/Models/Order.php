<?php

namespace App\Models;

use App\RepeatRelation\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use BelongsToUser;

    protected $guarded = [
        'id'
    ];


    /*
     * Start Define Relation
     */


    // Use BelongsToUser trait


    public function payments()
    {
        return $this->
        hasMany(Payment::class, 'order_id');
    }


    public function products()
    {
        return $this->
        belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')->
        withPivot('price', 'discount', 'final_price')->withTimestamps();
    }


    /*
     * End Of Define Relation
     */
}
