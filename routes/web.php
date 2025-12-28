<?php

use App\Livewire\Cms\Article\CreateArticleCategory;
use App\Livewire\Cms\Article\EditArticleCategory;
use App\Livewire\Cms\Article\ShowArticleCategory;
use App\Livewire\Cms\CmsHeader;
use App\Livewire\Cms\Article\ShowArticles;
use App\Livewire\Cms\Article\CreateArticle;

use App\Livewire\CmsFirstPage;
use App\Livewire\ContactWithUs;
use App\Livewire\EditArticles;
use App\Livewire\FirstPage;
use App\Livewire\PostsPage;
use App\Livewire\ReadPost;
use App\Livewire\ResumePage;
use App\Livewire\Register;
use App\Livewire\LoginPage;
use App\Livewire\ForgotPassword;
use App\Livewire\EnetrForgotPassword;
use App\Livewire\EnterPassword;
use App\Livewire\CheckEmail;

use App\Livewire\ContactWithUsPage;


use Illuminate\Support\Facades\Route;


Route::middleware(['web'])->group(function () {
  Route::get('/', FirstPage::class)->name('home-page');
  Route::get('/posts', PostsPage::class);
  Route::get('/posts/{post}', ReadPost::class)->name('read-post');;
  Route::get('/resume', ResumePage::class)->name('resume');
  Route::get('/contact-with-us', ContactWithUsPage::class);

  // صفحات احراز هویت
  Route::get('/register', Register::class);
  Route::get('/login', LoginPage::class)->name('login');
  Route::get('/forgot-password', ForgotPassword::class);
  Route::get('/enter-forgot-password', EnetrForgotPassword::class);
  Route::get('/enter-password/{otp}', EnterPassword::class)->name('enter-password');
  Route::get('/check-email', CheckEmail::class);
});
Route::middleware(['web', 'auth'])->group(function () {
  Route::get('/cms', CmsFirstPage::class);
  Route::get('/cms/contact-with-us', ContactWithUs::class)->name('show-contact-with-us');

  Route::get('/cms/articles/category-articles/', ShowArticleCategory::class)->name('show-category-article');
  Route::get('/cms/articles/create-category-articles', CreateArticleCategory::class);
  Route::get('/cms/articles/edit-category-articles/{articleCategory}', EditArticleCategory::class)->name('edit-category-article');;

  Route::get('/cms/article/create', CreateArticle::class);
  Route::get('/cms/articles', ShowArticles::class)->name('show-articles');
  Route::get('/cms/article/{article}/', EditArticles::class)->where('article', '[0-9]+')->name('edit-article');
  ;



});

