<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    const DefaultFile = 0;
    const ProfileImage = 1;


    protected $guarded = [
        'id'
    ];


    //Define Relationships


    public function fileable()
    {
        return $this->morphto();
    }


    //End Relationships
}
