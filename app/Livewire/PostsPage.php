<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Component;

class PostsPage extends Component
{
    public function render()
    {
        $articles = Article::orderBy("created_at" , 'desc')->paginate(4)->withQueryString() ;
       
        return view('livewire.posts-page' , compact("articles"))->layout("components.layouts.app" , ['title' => "پست ها"]);
    }
}
