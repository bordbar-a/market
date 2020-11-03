<?php

namespace App\Models;

use App\RepeatRelation\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    use BelongsToUser;
    protected $guarded = [
        'id',
    ];






    /*
     * Start Define Relation
     */


    // Use BelongsToUser trait



    public function order()
    {
        return $this->belongsTo(Order::class , 'order_id');
    }

    /*
     * End Of Define Relation
     */




}
