<?php

namespace App\Livewire\Cms\Article;

use App\Models\ArticleCategory;
use Livewire\Component;

class ShowArticleCategory extends Component
{
    public function render()
    {
         $items = ArticleCategory::orderBy('created_at', 'desc')->paginate(2)->withQueryString();
        return view('livewire.cms.article.show-article-category' , compact('items'))->layout("components.layouts.cms" , ['title' => " دسته بندی مقاله ها"]);;
    }
}
