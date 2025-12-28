<?php

namespace App\Traits\Permission;

use App\Models\User\Permission;

trait HasPermissionTrait
{

   public function hasPermission($permission){
    return (bool) $this->permissions->where('name' , $permission->name)->count() ;
   }

  public function hasRule(...$roles){
    foreach($roles as $role)
    {
        if($this->roles->contains("name" , $role)){
            return true;
        }
    }
    return false;
  }
  public function hasPermissionTo($permission){
    return  $this->hasPermission($permission) || $this->hasPermissionThroghRole($permission) ;
   }
public function hasPermissionThroghRole($permission){
    foreach($permission->roles as $role){
        if($this->roles->contains("name" , $role->name)){
            return true ;
        }
    }
    return false ;
}
}
