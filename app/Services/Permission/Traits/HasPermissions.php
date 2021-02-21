<?php


namespace App\Services\Permission\Traits;


use App\Models\Permission;
use DebugBar\DebugBar;
use Illuminate\Support\Arr;

trait HasPermissions
{

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }


    public function givePermissionTo(...$permissions)
    {
        $all_permissions = $this->getAllPermissions($permissions);
        if ($permissions->isEmpty()) {
            return $this;
        }

        $this->permissions()->syncWithoutDetaching($all_permissions);
    }


    public function refreshPermissions(...$permissions)
    {
        $all_permissions = $this->getAllPermissions($permissions);
        $this->permissions()->sync($all_permissions);
    }


    public function hasPermission($permission)
    {
        return $this->hasPermissionsThroughRole($permission) || $this->permissions->contains($permission);
    }


    public function hasPermissionsThroughRole(Permission $permission)
    {
        debug($permission->roles);
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }


    public function hasFullPermissions()
    {
        return $this->permissions->contains('name', 'all');
    }

    public function withdrawalPermissions(...$permissions)
    {

        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
    }

    protected function getAllPermissions($permissions)
    {

        return Permission::whereIn('name', Arr::flatten($permissions))->get();

    }

}
