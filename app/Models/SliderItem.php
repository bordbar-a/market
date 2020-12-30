<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderItem extends Model
{
    protected $guarded = [
        'id'
    ];

    public $timestamps = false;




    //define relation

    public function slider()
    {
        return $this->belongsTo(Slider::class, 'slider_id');
    }


    public function image()
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::SliderItemImage);
    }


    //end define relation



    public static function boot() {
        parent::boot();

        static::deleting(function($sliderItem) {
            $sliderItem->image()->delete();
        });
    }
}
