<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\ArticleCategory;
use Livewire\Component;
use Morilog\Jalali\Jalalian;
class ReadPost extends Component
{
   

    public function mount( $post)
    {
        $this->post = Article::findOrFail( $post );
    
    }
    public function render()
    {
          $categoryArticles = ArticleCategory::where('id' , $this->post->category_id)->with('articles')
            ->orderBy("created_at", 'desc')
            ->get()->first()
            ;
        return view('livewire.read-post' , ['article' => $this->post , 'categoryArticles' => $categoryArticles])->layout("components.layouts.app" , ['title' => "پست ها"]);;
    }
    }

