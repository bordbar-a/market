<?php

namespace App\Models;

use App\Presenters\Contracts\Presentable;
use App\Presenters\Order\OrderPresenter;
use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use mysql_xdevapi\Exception;

class Order extends Model
{
    use BelongsToUser, Presentable ,SoftDeletes;
    public $presenter = OrderPresenter::class;

    const PENDING = 0;
    const PAYED = 1;
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
        withPivot('count', 'price', 'discount', 'final_price')->withTimestamps();
    }


    public function hasStatus(int $status)
    {
        $statuses = [
            self::PENDING,
            self::PAYED,
            self::CANCELLATION
        ];
        if (!in_array($status, $statuses)) {
            throw new \Exception('the Status not Fount');
        }
        return $this->status == $status;
    }
    public function setStatus(int $status)
    {
        $statuses = [
            self::PENDING,
            self::PAYED,
            self::CANCELLATION
        ];
        if (!in_array($status, $statuses)) {
            throw new \Exception('the Status not Fount');
        }
        $this->status = $status;
        $this->save();
    }


    /*
     * End Of Define Relation
     */


}
