<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{


    const MAIN_MENU_NAME = 'منو اصلی سایت';
    protected $guarded = [
        'id'
    ];

    public $timestamps = false;


    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
