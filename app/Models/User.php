<?php

namespace App\Models;

use App\Entities\FileType;
use App\Presenters\Contracts\Presentable;
use App\Presenters\User\ProductPresenter;
use App\Presenters\User\UserPresenter;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, Presentable;


    const UserImageDisk = 'userImage';
    const UserImagePath = 'app' . DIRECTORY_SEPARATOR . 'usersImage' . DIRECTORY_SEPARATOR;

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


    public function profileImage()
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::ProfileImage);
    }

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


    //start Mutator for this class
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }


    //End Mutator fot this class


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


    public function hasRole(int $role)
    {
        if ($this->role == $role) {
            return true;
        }
        return false;
    }

}
