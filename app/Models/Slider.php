<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{


    const FIRST_PAGE_SLIDER_NAME = 'صفحه نخست';
    protected $guarded = [
        'id'
    ];

    public $timestamps = false;


    public function items()
    {
        return $this->hasMany(SliderItem::class);
    }
}
