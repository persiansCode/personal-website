<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategory extends Model
{
     use HasFactory , SoftDeletes , Sluggable;

    protected $guarded = ['id'] ; 

    protected $fillable = ['tags' , 'slug' , 'status' , 'name' , 'image' , 'description'];

    protected $casts = ['image' => 'array' ];

     public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
       public function articles(){
        return $this->hasMany(Article::class  , 'category_id');
    }
}
