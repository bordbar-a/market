<?php


namespace App\Services\Permission\Traits;


use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
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
        if ($all_permissions->isEmpty()){
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
        if($this instanceof User){
            if ($this->hasPermissionThroughRoles($permission))return true;
        }
        return $this->permissions->contains('name', Permission::ALL) || $this->permissions->contains('name' ,$permission) ;
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
