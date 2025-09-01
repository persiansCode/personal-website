<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory , SoftDeletes;

    public function permissions(){
       return $this->belongsToMany(Permission::class);
    }
       public function users(){
       return $this->belongsToMany(User::class);
    }
}
