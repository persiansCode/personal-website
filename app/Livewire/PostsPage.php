<?php

namespace App\Livewire;
use App\Models\Article;
use App\Models\ArticleCategory;
use Livewire\Component;

class PostsPage extends Component
{
    public function render()
    {
        $articles = Article::with('categoryArticles.articles')
            ->orderBy("created_at", 'desc')
            ->paginate(4)
            ->withQueryString();

        $categoryArticles = ArticleCategory::with('articles')
            ->orderBy("created_at", 'desc')
            ->get()
            ->toArray();

        return view('livewire.posts-page', compact('articles', 'categoryArticles'))
            ->layout("components.layouts.app", ['title' => "پست ها"]);
    }
}
