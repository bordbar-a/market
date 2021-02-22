<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    const CREATE_USERS = 'create_users';
    const UPDATE_USERS = 'update_users';
    const READ_USERS = 'read_users';
    const DELETE_USERS = 'delete_users';
    const CREATE_PRODUCTS = 'create_products';
    const READ_PRODUCTS = 'read_products';
    const UPDATE_PRODUCTS = 'update_products';
    const DELETE_PRODUCTS = 'delete_products';
    const SETTINGS = 'settings';
    const COMMENTS = 'comments';
    const CATEGORIES = 'categories';
    const MENU = 'menu';
    const PERMISSIONS = 'permissions';
    const SLIDERS = 'sliders';
    const ORDERS = 'orders';
    const ALL = 'all';
    const ADMIN_PANEL = 'admin-panel';
    const PROFILE_PANEL = 'profile-panel';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


}
