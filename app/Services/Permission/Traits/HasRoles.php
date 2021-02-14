<?php


namespace App\Services\Permission\Traits;


use App\Models\Role;
use Illuminate\Support\Arr;

trait HasRoles
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function giveRolesTo(...$roles)
    {
        $roles = $this->getAllRoles($roles);

        if ($roles->isEmpty()) {
            return $this;
        }

        $this->roles()->syncWithoutDetaching($roles);
        return $this;
    }


    public function withdrawalRoles(...$roles)
    {
        $roles = $this->getAllRoles($roles);

        $this->roles()->detach($roles);
        return $this;
    }

    public function refreshRoles(...$roles)
    {
        $roles = $this->getAllRoles($roles);
        $this->roles()->sync($roles);
        return $this;
    }


    public function hasRole(string $role)
    {
        return $this->roles->contain('name', $role);
    }


    public function getAllRoles($roles)
    {
        return Role::whereIn('name', Arr::flatten($roles))->get();
    }

}
