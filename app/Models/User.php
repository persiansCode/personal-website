<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\User\Permission;
use App\Models\User\Role;
use App\Traits\Permission\HasPermissionTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable , HasPermissionTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'number',
        'email_verified_at',
        'number_verified_at',
        'email',
        'password',
    ];
protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
  protected function casts(): array
{
    return [
        'email_verified_at' => 'datetime',
        'number_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

        public function otp()
    {
        return $this->hasMany(Otp::class);
    }
      

    public function permissions(){
      return  $this->belongsToMany(Permission::class);
    }   

    public function roles(){
     return   $this->belongsToMany(Role::class);
    }
    public function fullName(){
        return $this->first_name . " " . $this->last_name  ;
    }
}
