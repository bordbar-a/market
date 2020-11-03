<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $guarded = [
        'id'
    ];


    /*
     * Start Define Relation
     */


    public function products()
    {
        return $this->
        belongsToMany(Product::class, 'category_product', 'category_id', 'product_id');
    }


    public function children()
    {
        return $this->hasMany(Category::class , 'parent_id');

    }


    public function parent()
    {
        return $this->belongsTo(Category::class , 'parent_id');

    }

    /*
     * End Of Define Relation
     */


}
