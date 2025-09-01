<?php

namespace App\Livewire\Cms\Article;
use App\Models\Article;

use Livewire\Component;

class ShowArticles extends Component
{
    public function render()

    {
        $items = Article::orderBy('created_at', 'desc')->paginate(2)->withQueryString();
        return view('livewire.cms.article.show-articles' , compact('items'))->layout("components.layouts.cms" , ['title' => " مقاله ها"]);;
    }
}
