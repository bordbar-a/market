<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $guarded = [
        'id'
    ];

    public $timestamps = false;




    // Relation Section

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }


    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }


    public function parent(){
        return $this->belongsTo(MenuItem::class , 'parent_id');
    }
}
