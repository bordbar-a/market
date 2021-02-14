<?php

namespace App\Models;

use App\Services\Permission\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasPermissions;
    protected $fillable = ['name' , 'persian_name'];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
