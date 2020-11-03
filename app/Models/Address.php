<?php

namespace App\Models;

use App\RepeatRelation\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use BelongsToUser;
    protected $guarded = ['id'];


    /*
     * Start Define Relation
     */


    // Use BelongsToUser trait



    /*
     * End Of Define Relation
     */

}
