<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
class EditArticles extends Component
{
    public Article $article; 

    public function mount(Article $article ) 
    {
        $this->article = $article;
    }
    public function render()
    {
      
        return view('livewire.cms.article.edit-articles' , ['article' => $this->article])->layout("components.layouts.cms" , ['title' => "پنل مدیریت"]);
    }
}
