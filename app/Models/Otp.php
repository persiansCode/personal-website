<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;
    protected $fillable = ['number' , 'email' , 'user_id' , 'otp_code' , 'token' , 'type'] ;
    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}