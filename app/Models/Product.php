<?php

namespace App\Models;

use App\Presenters\Contracts\Presentable;
use App\Presenters\Product\ProductPresenter;
use App\Traits\BelongsToUser;
use App\Traits\MorphManyComments;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use BelongsToUser, MorphManyComments, Presentable;

    //status

    const DRAFT = 0;
    const PUBLISHED = 1;
    const PENDING = 2;
    const FUTURE = 3;


    protected $guarded = [
        'id'
    ];


    protected $presenter = ProductPresenter::class;


    /*
     * Start Define Relation
    */


    // Use BelongsToUser , MorphManyComments trait , for relation


    public function pictures()
    {
        return $this->morphMany(File::class, 'fileable')->where('type', File::ProductPicture);
    }


    public function orders()
    {
        return $this->
        belongsToMany(Order::class, 'order_product', 'product_id', 'order_id')->
        withPivot('price', 'discount', 'final_price')->withTimestamps();
    }


    public function categories()
    {
        return $this->
        belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }


    public static function getProductStatuses($status = '')
    {
        $statuses = [
            self::DRAFT => 'پیش نویس',
            self::PUBLISHED => 'منتشر شده',
            self::PENDING => 'در انتظار',
            self::FUTURE => 'آینده',

        ];


        if ($status === '') {
            return $statuses;
        }else{
            if(in_array($status , array_keys($statuses))){
                return $statuses[$status];
            }else{
                return 'تعریف نشده';
            }

        }

    }


    /*
     * End Of Define Relation
     */


    public function scopePublished($query)
    {
        return $query->where('status' , self::PUBLISHED);
    }
}
