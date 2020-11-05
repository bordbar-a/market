<?php

namespace App\Models;

use App\Presenters\Contracts\Presentable;
use App\Presenters\User\UserPresenter;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Presentable;


    //Role Constants
    const User = 0;
    const Admin = 1;
    const Editor = 2;


    // Status Constants
    const PENDING = 0;
    const ACTIVE = 1;
    const INACTIVE = 2;

    //define presenter class
    private $presenter = UserPresenter::class;
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
        return $this->hasMany(Payment::class, 'user_id');
    }


    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }


    public function addresses()
    {
        return $this->hasMany(Address::class, 'user_id');
    }


    public function products()
    {
        return $this->hasMany(Product::class, 'user_id');
    }

    /*
     * End Of Define Relation
     */


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public static function getUserRoles()
    {
        return [
            self::User => 'کاربر عادی',
            self::Admin => 'کاربر مدیر',
            self::Editor => 'کاربر نویسنده',
        ];
    }


    public static function getUserStatuses()
    {
        return [
            self::PENDING => 'تایید نشده',
            self::ACTIVE => 'فعال',
            self::INACTIVE => 'غیرفعال',
        ];
    }


}
