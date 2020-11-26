<?php

namespace App\Models;

use App\Presenters\Contracts\Presentable;
use App\Presenters\Order\OrderPresenter;
use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use BelongsToUser , Presentable;
    public $presenter = OrderPresenter::class;

    const PENDING = 0;
    const PAYED= 1;
    const CANCELLATION = 2;


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
