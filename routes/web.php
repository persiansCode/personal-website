<?php

use App\Livewire\Cms\CmsHeader;
use App\Livewire\Cms\Article\ShowArticles;
use App\Livewire\Cms\Article\CreateArticle;

use App\Livewire\CmsFirstPage;
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
    Route::get('/posts/{post}', ReadPost::class);
    Route::get('/resume', ResumePage::class);
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
    Route::get('/cms/articles', ShowArticles::class);
    Route::get('/cms/articles/{article}', EditArticles::class);
    Route::get('/cms/article/create', CreateArticle::class);
});

