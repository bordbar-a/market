<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /*
     * Start Define Relation
     */

    public function payments()
    {
        return $this->hasMany(Payment::class , 'user_id');
    }


    public function orders()
    {
        return $this->hasMany(Order::class , 'user_id');
    }


    public function addresses()
    {
        return $this->hasMany(Address::class , 'user_id');
    }


    public function products()
    {
        return $this->hasMany(Product::class , 'user_id');
    }

    /*
     * End Of Define Relation
     */

}
