<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Users;
class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory , SoftDeletes , Sluggable;

    protected $guarded = ['id'] ; 

    protected $fillable = ['tags' , 'arthor_id' , 'date' , 'title' , 'image' , 'description' , 'category_id' , 'slug', 'status'];

    protected $casts = ['image' => 'array' ];

    public function categoryArticles(){
        return $this->belongsTo(ArticleCategory::class , 'category_id');
    }
        public function arthor(){
        return $this->belongsTo(User::class , 'arthor_id');
    }
        public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
