<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [
        'id'
    ];

    public $timestamps = false;


    public function items()
    {
        return $this->hasMany(SliderItem::class);
    }
}
