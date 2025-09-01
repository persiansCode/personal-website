<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory , SoftDeletes;

    protected $guarded = ['id'] ; 

    protected $fillable = ['tags' , 'arthor' , 'date' , 'title' , 'image' , 'description'];

    protected $casts = ['image' => 'array'];
}
