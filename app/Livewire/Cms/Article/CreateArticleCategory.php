<?php

namespace App\Livewire\Cms\Article;

use App\Http\Image\ImageService;
use App\Models\Article;
use App\Models\ArticleCategory;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticleCategory extends Component
{
      use WithFileUploads;


    public $name = '';

    public $description = '';
    public  $status = '';

    public $tags ;

    public $photo;
         protected $rules = [
      'status' => 'required|integer|in:0,1',
     
      'photo' => "mimes:jpg,bmp,png,gif,application/octet-stream|required",
      'description' =>  'required|max:900|min:5|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي.,><\/;\n\r& ]+$/u',
      'name' =>  'required|max:900|min:5|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي.,><\/;\n\r& ]+$/u',
      'tags' => 'required|max:120|min:2'
    ];

      public function submit(ImageService $imageService)
    {
        
        $this->validate();

   $imageService->setExclusiveDirectory("category-article-image") ; 
     $image =   $imageService->createIndexAndSave($this->photo);

       $newArticle =   ArticleCategory::create(
            ['name' => $this->name, 'description' => $this->description , 'status' => $this->status 
             , "image" => $image['indexArray'], 'tags' => is_array($this->tags) ? implode(',', $this->tags) : $this->tags]
        );
              $this->dispatch('swal', [
                        'title' => 'موفقیت ',
                        'text' => ' شما با موفقیت اطلاعات جدیدی ثبت کردید   ',
                        'icon' => 'success',

                    ]);
 return redirect()->route('show-category-article');
   
  }
    public function render()
    {
        return view('livewire.cms.article.create-article-category')->layout("components.layouts.cms" , ['title' => " ساختن مقاله ها"]);;
    }
}
