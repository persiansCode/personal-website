<?php

namespace App\Livewire;

use App\Http\Image\ImageService;
use App\Models\ArticleCategory;
use Livewire\Component;
use App\Models\Article;
use Livewire\WithFileUploads;
use Morilog\Jalali\Jalalian;
class EditArticles extends Component
{

           use WithFileUploads;
    public $article;
    public $title ;
    public $description ;
    public $date ;

    public  $status = ''; 
       public $tags ;


    public $photo;
 


    public function mount(Article $article ) 
    {
        $this->article = $article;

    $this->status = $article->status;
   
    $this->title = $article->title;
    $this->description = $article->description;
    $this->tags = $article->tags;
    $persiandate = Jalalian::fromDateTime($article->date)->format('Y/m/d h:i:s');
    $this->date = $persiandate  ;

    }


         protected $rules = [
      'status' => 'required|integer|in:0,1',
      'date' =>  'required',
       "category_id" => "required|exists:article_categories,id",
      'photo' => "mimes:jpg,bmp,png,gif,application/octet-stream|required",
      'description' =>  'required',
      'title' =>  'required|max:900|min:5|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي.,><\/;\n\r& ]+$/u',
      'tags' => 'required|max:120|min:2'
    ];

      public function submit(ImageService $imageService)
    {
        
        // $this->validate();
if($this->photo){
    $imageService->deleteIndex( $this->article->image );
       $imageService->setExclusiveDirectory("article-image") ; 

     $image =   $imageService->createIndexAndSave($this->photo);
}else{
     $image= $this->article->image;
}

    [$shamsiDate, $time] = explode(' ', $this->date);
[$year, $month, $day] = explode('/', $shamsiDate);
[$hour, $minute, $second] = explode(':', $time);

$miladiDateTime = (new Jalalian($year, $month, $day, $hour, $minute, $second))->toCarbon()->format('Y-m-d H:i:s');



       $newArticle =   $this->article->update(
            ['title' => $this->title, 'date' =>$miladiDateTime , 'description' => $this->description , 'status' => $this->status 
             , "image" => $image, 'tags' => is_array($this->tags) ? implode(',', $this->tags) : $this->tags]
        ); 
              $this->dispatch('swal', [
                        'title' => 'موفقیت ',
                        'text' => ' شما با موفقیت اطلاعات جدیدی ثبت کردید   ',
                        'icon' => 'success',

                    ]);
 return redirect()->route('show-articles');
   
  }
    public function render()
    {
       $categories = ArticleCategory::all()->select(['id' , 'name'])->toArray();
        return view('livewire.cms.article.edit-articles' , ['article' => $this->article , 'categories'=>$categories])->layout("components.layouts.cms" , ['title' => "پنل مدیریت"]);
    }
}
